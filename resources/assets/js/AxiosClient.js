import axios from './axios.js';

export default class Axios {
    /*
    * Submit the form return appropriate response
    */

    submit(type, url, data = null) {

        if (!url.includes("http")) { // if relative url is given
            if (location.hostname === 'localhost') {
                url = window.location.protocol + '//' + location.hostname + '/magazine/public/' + url;
            } else {
                url = window.location.protocol + '//' + location.hostname + '/' + url;
            }
        }
        return new Promise((resolve, reject) => {
            /*
            * Axios post request
             */
            if (type === 'post') {
                axios.post(url, data)
                    .then(response => resolve(response.data))
                    .catch(error => reject(error.response.data));
            }
            else if (type === 'get') {

                if (data !== null) {
                    axios.get(url, {
                        params: data
                    })
                        .then(response => resolve(response.data))
                        .catch(error => reject(error.response.data));
                } else {
                    axios.get(url)
                        .then(response => resolve(response.data))
                        .catch(error => reject(error.response.data));
                }
            }

        });
    }


}