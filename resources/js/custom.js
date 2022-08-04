/**
 * Javascript slug
 */
String.prototype.slugify = function (separator = "-") {
    return this
        .toString()
        .normalize('NFD')                   // split an accented letter in the base letter and the acent
        .replace(/[\u0300-\u036f]/g, '')   // remove all previously split accents
        .replaceAll('/a', '')   // remove spanish gender
        .toLowerCase()
        .trim()
        .replace(/[^a-z0-9 ]/g, '')   // remove all chars not letters, numbers and spaces (to be replaced)
        .replace(/\s+/g, separator);
}

/**
 * Link out
 */
window.link_out = function(id) {
    return window.open(
        window.location.origin + '/links/referenfe?id=' + id,
        'Buscador de empleo - enlace externo',
        'menubar=yes,location=yes,resizable=yes,scrollbars=yes,status=yes'
    );
}

/**
 * Generate url
 */
window.to_url = function(categoryName, category, languageName, language, provinceName, province) {

    let url = window.location.origin + '/categorias';

    if(category) {
        url = url + '/' + categoryName + '/' + category;
    }

    if(language) {
        url = url + '/lenguaje/' + languageName + '/' + language;
    }

    if(province) {
        url = url + '/' + provinceName + '/' + province;
    }

    return url;
};
