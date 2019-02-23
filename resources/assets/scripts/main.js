/* eslint-disable */

/*
* Polyfills go here
*/

/*
* Imports go here
*/

import Hello from './components/hello'
import Modal from './components/modal'

/*
* Define components and initialize them if they exist
*/


const components = [
    {
        class: Hello,
        selector: '.js-hello'
    },
    {
        class: Modal,
        selector: '.js-modal-trigger'
    },
]

components.forEach(component => {
    if (document.querySelector(component.selector) !== null)
        document.querySelectorAll(component.selector).forEach(element => new component.class(element, component.options))
})














