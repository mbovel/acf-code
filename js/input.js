(function($) {

    function initialize_field($el) {
        var editor = ace.edit($el.find('.editor')[0]);
        var $textarea = $el.find('textarea');

        // Automatically adjust height to contents in Ace Cloud9 editor
        // http://stackoverflow.com/a/13579233
        editor.setOptions({
            showPrintMargin: false,
            fontSize: 14,
            minLines: 15,
            maxLines: 1000,
            theme: 'ace/theme/' + $textarea.data('theme'),

            wrap: true,
            mode: 'ace/mode/' + $textarea.data('language')
        });

        // How to do something before on submit?
        // http://stackoverflow.com/a/8053433
        $("#post").submit(function() {
            // How do I make a textarea an ACE editor?
            // http://stackoverflow.com/a/7979758
            $textarea.val(editor.getSession().getValue());
        });
    }


    if(typeof acf.add_action !== 'undefined') {

        /*
         *  ready append (ACF5)
         *
         *  These are 2 events which are fired during the page load
         *  ready = on page load similar to $(document).ready()
         *  append = on new DOM elements appended via repeater field
         *
         *  @type	event
         *  @date	20/07/13
         *
         *  @param	$el (jQuery selection) the jQuery element which contains the ACF fields
         *  @return	n/a
         */

        acf.add_action('ready append', function($el) {
            // search $el for fields of type 'code'
            acf.get_fields({
                type: 'code'
            }, $el).each(function() {
                initialize_field($(this));
            });
        });
    }
    else {

        /*
         *  acf/setup_fields (ACF4)
         *
         *  This event is triggered when ACF adds any new elements to the DOM.
         *
         *  @type	function
         *  @since	1.0.0
         *  @date	01/01/12
         *
         *  @param	event		e: an event object. This can be ignored
         *  @param	Element		postbox: An element which contains the new HTML
         *
         *  @return	n/a
         */

        $(document).on('acf/setup_fields', function(e, postbox) {
            $(postbox).find('.field[data-field_type="code"]').each(function() {
                initialize_field($(this));
            });
        });
    }
})(jQuery);
