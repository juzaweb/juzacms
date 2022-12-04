let editor = null;

function loadFileEditor(file) {
    $('.loading.editor').show();

    ajaxRequest(
        loadFileUrl + "&file="+ file,
        {},
        {
            method: 'GET',
            callback: function (data) {
                if (!editor) {
                    $('#editor').empty();
                    editor = monaco.editor.create(document.getElementById('editor'), {
                        model: null
                    });
                }

                let oldModel = editor.getModel();
                let newModel = monaco.editor.createModel(data.content, data.language);
                editor.setModel(newModel);

                if (oldModel) {
                    oldModel.dispose();
                }

                let newUrl = pluginEditUrl.replace('__PLUGIN__', currentPlugin) + "&file=" + file;
                window.history.pushState({},"", newUrl);
                $('.loading.editor').fadeOut({ duration: 200 });
            }
        }
    );
}

$(document).ready(function() {
    $('.treeview-animated').mdbTreeview();

    $(document).on('change', '#change-plugin', function () {
        window.location = pluginEditUrl.replace('__PLUGIN__', $(this).val());
        return false;
    });

    $(document).on('click', '.is-file', function () {
        file = $(this).data('path');
        loadFileEditor(file);
        return false;
    });

    require.config({ paths: { vs: monacoFolder } });

    require(['vs/editor/editor.main'], function () {
        loadFileEditor(file);

        $('#save-change').on('click', function () {
            let btn = $(this);
            let icon = btn.find('i').attr('class');

            btn.find('i').attr('class', 'fa fa-spinner fa-spin');
            btn.prop("disabled", true);

            ajaxRequest(saveUrl, {
                content: editor.getValue(),
                plugin: currentPlugin,
                file: file,
            }, {
                method: 'PUT',
                callback: function (response) {
                    show_message(response);

                    btn.find('i').attr('class', icon);
                    btn.prop("disabled", false);
                },
                failCallback: function (response) {
                    btn.find('i').attr('class', icon);
                    btn.prop("disabled", false);
                }
            });
        });
    });
});
