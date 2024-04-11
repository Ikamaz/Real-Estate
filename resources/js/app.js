import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import { router } from '@inertiajs/vue3'
import { ZiggyVue } from 'ziggy-js'
import NProgress from 'nprogress'
import MainLayout from './Layouts/MainLayout.vue'
import '../css/app.css'

let timeout = null

router.on('start', () => {
  timeout = setTimeout(() => NProgress.start(), 50)
})

createInertiaApp({
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    let page = pages[`./Pages/${name}.vue`]
    page.default.layout = page.default.layout || MainLayout
    return page
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .use(ZiggyVue)
      .mount(el)
  },
})
