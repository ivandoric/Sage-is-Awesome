/* eslint-disable */
export default function isObjectEmpty(object) {
    for (const prop in object) {
        if (object.hasOwnProperty(prop)) return false
    }

    return true
}
