<template>
    <div class="row">
        <div class="col-sm-5">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Add Department</h3>
                </div>

                <!--Block Styled Form -->
                <!--===================================================-->
                <form @submit.prevent="postData" @keyup="clearError">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="control-label">Department Name</label>
                                    <input type="text" class="form-control" v-model="form.departmentName">
                                    <small class="text-danger" v-if="has('departmentName')">
                                        {{ getError('departmentName') }}
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer text-right">
                        <button class="btn btn-success" type="submit">Submit</button>
                    </div>
                </form>
                <!--===================================================-->
                <!--End Block Styled Form -->

            </div>
        </div>
        <div class="col-sm-7">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Existing Departments</h3>
                </div>

                <div class="panel-body">
                    <div class="pages" v-if="total>0">
                        {{ (currentPage * pagination) - pagination + 1}} to {{ total > pagination ? (currentPage * pagination) > total ? total : (currentPage * pagination) : total
                        }} out of {{ total }} entries
                    </div>
                    <div v-else-if="!initialLoad" class="pages">No Result</div>
                    <div v-else class="pages">Loading...</div>
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th class="col-sm-2">Sl no</th>
                            <th class="col-sm-8">Department Name</th>
                            <th class="col-sm-2"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-if="departments.length" v-for="(department,index) in departments">
                            <td>{{ (currentPage * pagination) - pagination + index + 1}}</td>
                            <td> {{ department.department_name }}</td>
                            <td class="text-center" @click="deleteDepartment(index)"><i class="fa fa-trash delete"></i>
                            </td>
                        </tr>
                        <tr v-if="initialLoad">
                            <td class="text-center" colspan="4"><i class="fa fa-cog fa-spin fa-2x"></i></td>
                        </tr>
                        <tr v-if="!departments.length && !initialLoad">
                            <td class="text-center" colspan="6">No Data Available</td>
                        </tr>
                        </tbody>
                    </table>
                    <!--Pagination-->
                    <ul class="pager pager-rounded" v-if="nextPageUrl !== null || previousPageUrl !== null">
                        <li :class="previousPageUrl === null?'disabled':''"><a href=""
                                                                               @click.prevent="paginate(false,{fun:getDepartments})"><i
                                class="demo-psi-arrow-left"></i> Previous</a></li>
                        <li :class="nextPageUrl === null?'disabled':''"><a href=""
                                                                           @click.prevent="paginate(true,{fun:getDepartments})">Next <i
                                class="demo-psi-arrow-right"></i></a></li>
                    </ul>
                    <!--End Pagination-->
                </div>

            </div>
        </div>
    </div>
</template>
<script>
    import Axios from '../../AxiosClient.js';
    import {pagination} from '../mixins/paginationMixin.js';

    export default {
        mixins: [pagination],
        data() {
            return {
                axios: new Axios(),
                form: {
                    departmentName: '',
                },
                errors: {},
                departments: {},
                initialLoad: true,
                total: 0,
            }
        },
        methods: {
            postData() {
                this.axios.submit('post', 'admin/addDepartments', this.form)
                    .then(data => {
                        if (data.status) {
                            this.flashNotification('Success',data.message,'success');
                            this.clearForm();
                            this.getDepartments('admin/getDepartments');
                        }
                    })
                    .catch(error => {
                        this.errors = error.errors;
                    });
            },
            has(field) {
                if (this.errors[field]) {
                    return true;
                } else {
                    return Object.keys(this.errors).length > 0;
                }
            },
            getError(field) {
                if (this.errors[field]) {
                    return this.errors[field][0];
                }
            },
            clearError() {
                this.errors = {};
            },
            flashNotification(title,message, type,) {
                swal({ // confirmation
                    title: title,
                    text: message,
                    type: type,
                })
            },
            clearForm() {
                for (let item in this.form) {
                    this.form[item] = '';
                }
            },
            getDepartments(url) {
                this.axios.submit('get', url)
                    .then(data => {
                        this.departments = data.departments.data;
                        this.initialLoad = false;
                        this.nextPageUrl = data.departments.next_page_url;
                        this.previousPageUrl = data.departments.prev_page_url;
                        this.currentPage = data.departments.current_page;
                        this.total = data.departments.total;
                        this.pagination = data.departments.per_page;
                    })
                    .catch(error => {

                    });
            },
            deleteDepartment(index) {
                swal({ // confirmation
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.value) {
                        this.axios.submit('get', 'admin/deleteDepartment', {'department_id': this.departments[index].id})
                            .then(({status, message}) => {
                                if (status) {
                                    this.departments.splice(index, 1);
                                    this.flashNotification('Success!', message,'success');
                                    this.pagination--;
                                    this.total--;
                                } else {
                                    this.flashNotification('Oops!', message, 'error');
                                }
                            })
                            .catch(error => {

                            });
                    }
                });
            }
        },
        created(e) {
            this.getDepartments('admin/getDepartments');
        }
    }
</script>
<style scoped>
    .delete {
        cursor: pointer;
    }

    .pages {
        margin: 0 0 15px 0;
    }
</style>