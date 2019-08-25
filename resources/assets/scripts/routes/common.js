export default {
  init() {
    document.addEventListener('routed', e => {
      const routeName = e.detail.route;
      const routeEvent = e.detail.fn;

      console.log(routeName, routeEvent);
    });
  },
  finalize() {
    console.log('I should run last');
  },
};
