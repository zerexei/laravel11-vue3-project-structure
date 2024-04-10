import axios, { AxiosStatic } from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

declare global {
    interface Window {
        axios: AxiosStatic;
    }
}

window.axios = axios;