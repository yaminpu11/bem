
var translation_table = [];

function UpdateLanguage() {

    var url = base_url_js_server_ws+'api3/__getLanguagelabels?lang='+current_language;

    $.getJSON(url,function (jsonResult) {
        translation_table = jsonResult;

        $("lang").each(function(index, el) {
            var orig = $(el).attr("orig");
            if (orig == null) {
                $(el).attr("orig", $(el).text());
                orig = $(el).text();
            }
            $(el).text(GetLocalizedString(orig));
        });

        $("[placeholder]").each(function(index, el) {
            var orig = $(el).attr("orig");
            if (orig == null) {
                $(el).attr("orig", $(el).attr("placeholder"));
                orig = $(el).attr("placeholder");
            }
            $(el).attr("placeholder", GetLocalizedString(orig));
        });
        $("[data-placeholder]").each(function(index, el) {
            var orig = $(el).attr("orig");
            if (orig == null) {
                $(el).attr("orig", $(el).attr("placeholder"));
                orig = $(el).attr("placeholder");
            }
            $(el).attr("placeholder", GetLocalizedString(orig));
        });
        $("[data-tooltip]").each(function(index, el) {
            var orig = $(el).attr("orig");
            if (orig == null) {
                $(el).attr("orig", $(el).attr("data-tooltip"));
                orig = $(el).attr("data-tooltip");
            }
            app.tooltip.setText($(el), GetLocalizedString(orig));
            $(el).attr("data-tooltip", GetLocalizedString(orig));
        });

    });

}

function GetLocalizedString(key) {

    if (translation_table[current_language][key] == undefined) {
        console.log("Missing " + current_language + " translation for '" + key + "'");
        return key;
    }

    return translation_table[current_language][key];
}

function getCurrentLanguage() {
    var la = localStorage.getItem("language");
    var current_language = (la=='' || la==null || la === 'undefined') ? "Eng" : la;

    $('.btn-change-lang').removeClass('btn-lang-active');
    $('.btn-change-lang[data-lang='+current_language+']').addClass('btn-lang-active');

    return current_language;
}