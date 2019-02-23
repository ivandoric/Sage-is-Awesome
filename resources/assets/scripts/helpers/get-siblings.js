export default function getSiblings(el) {
    const siblings = []
    const element = el.parentElement.firstElementChild
    do siblings.push(element)
    while (element === el.nextElementSibling)
    return siblings
}
