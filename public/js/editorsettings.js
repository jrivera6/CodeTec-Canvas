var modhtmlmixto = {
    name: "htmlmixed",
    scriptTypes: [{matches: /\/x-handlebars-template|\/x-mustache/i,
               mode: null},
              {matches: /(text|application)\/(x-)?vb(a|script)/i,
               mode: "vbscript,css"}]
};

    var editor = CodeMirror.fromTextArea(document.getElementById("editorcodigo"),{
        
        mode: modhtmlmixto,
        theme: "dracula",
        lineNumbers: true,
        autoCloseTags: true,
        autocorrect: true,
    });
    