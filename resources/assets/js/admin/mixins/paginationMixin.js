/**
 * Pagination functions for all page
 */
export const pagination = {
    data() {
        return {
            nextPageUrl: null,
            previousPageUrl: null,
            currentPage: 1,
            pagination: 0,
        };
    },
    methods: {
        /**
         * type : next/previous, fun : data loading function, data : arguments of the data loading function scroll : scroll to top after pagination
         */
        paginate(type, {fun, data = null}, scroll = false) {
            if (type) {
                if (data !== null)
                    fun(this.nextPageUrl, data);
                else
                    fun(this.nextPageUrl);
            } else {
                if (data !== null)
                    fun(this.previousPageUrl, data);
                else
                    fun(this.previousPageUrl);
            }
            if (scroll) {
                $('html, body').animate({scrollTop: 0}, 'fast');
            }
        },
    },
};