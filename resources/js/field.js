Nova.booting((Vue, router, store) => {
    Vue.component('index-color-count-text-field', require('./components/text/IndexField'))
    Vue.component('detail-color-count-text-field', require('./components/text/DetailField'))
    Vue.component('form-color-count-text-field', require('./components/text/FormField'))

    Vue.component('index-color-count-text-area-field', require('./components/textarea/IndexField'))
    Vue.component('detail-color-count-text-area-field', require('./components/textarea/DetailField'))
    Vue.component('form-color-count-text-area-field', require('./components/textarea/FormField'))
})
