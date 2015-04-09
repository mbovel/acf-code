<?php

class acf_field_code extends acf_field {
    /*
    *  __construct
    *
    *  This function will setup the field type data
    *
    *  @type	function
    *  @date	5/03/2014
    *  @since	5.0.0
    *
    *  @param	n/a
    *  @return	n/a
    */

    public function __construct() {

        /*
        *  name (string) Single word, no spaces. Underscores allowed
        */

        $this->name = 'code';

        /*
        *  label (string) Multiple words, can include spaces, visible when selecting a field type
        */

        $this->label = __('Code', 'acf-code');

        /*
        *  category (string) basic | content | choice | relational | jquery | layout | CUSTOM GROUP NAME
        */

        $this->category = 'content';

        /*
        *  defaults (array) Array of default settings which are merged into the field object. These are used later in settings
        */

        $this->defaults = [
            'language'    => 'html',
            'theme'       => 'github',
        ];

        /*
        *  l10n (array) Array of strings that are used in JavaScript. This allows JS strings to be translated in PHP and loaded via:
        *  var message = acf._e('code', 'error');
        */

        $this->l10n = [
            'error'    => __('Error! Please enter a higher value', 'acf-code'),
        ];

        // do not delete!
        parent::__construct();

    }

    /*
    *  render_field_settings()
    *
    *  Create extra settings for your field. These are visible when editing a field
    *
    *  @type	action
    *  @since	3.6
    *  @date	23/01/13
    *
    *  @param	$field (array) the $field being edited
    *  @return	n/a
    */

    public function render_field_settings($field) {

        /*
        *  acf_render_field_setting
        *
        *  This function will create a setting for your field. Simply pass the $field parameter and an array of field settings.
        *  The array of settings does not require a `value` or `prefix`; These settings are found from the $field array.
        *
        *  More than one setting can be added by copy/paste the above code.
        *  Please note that you must also have a matching $defaults value for the field name (font_size)
        */

        acf_render_field_setting($field, [
            'label'             => __('Language', 'acf-code'),
            'instructions'      => __('Language to use for highlighting.', 'acf-code'),
            'type'              => 'select',
            'name'              => 'language',
            'choices'           => [
                'abap'         => __('ABAP', 'acf-code'),
                'abc'          => __('ABC', 'acf-code'),
                'actionscript' => __('ActionScript', 'acf-code'),
                'ada'          => __('ADA', 'acf-code'),
                'apache_conf'  => __('Apache Conf', 'acf-code'),
                'asciidoc'     => __('AsciiDoc', 'acf-code'),
                'assembly_x86' => __('Assembly x86', 'acf-code'),
                'autohotkey'   => __('AutoHotKey', 'acf-code'),
                'batchfile'    => __('BatchFile', 'acf-code'),
                'c9search'     => __('C9Search', 'acf-code'),
                'c_cpp'        => __('C and C++', 'acf-code'),
                'cirru'        => __('Cirru', 'acf-code'),
                'clojure'      => __('Clojure', 'acf-code'),
                'cobol'        => __('Cobol', 'acf-code'),
                'coffee'       => __('CoffeeScript', 'acf-code'),
                'coldfusion'   => __('ColdFusion', 'acf-code'),
                'csharp'       => __('C#', 'acf-code'),
                'css'          => __('CSS', 'acf-code'),
                'curly'        => __('Curly', 'acf-code'),
                'd'            => __('D', 'acf-code'),
                'dart'         => __('Dart', 'acf-code'),
                'diff'         => __('Diff', 'acf-code'),
                'dockerfile'   => __('Dockerfile', 'acf-code'),
                'dot'          => __('Dot', 'acf-code'),
                'dummy'        => __('Dummy', 'acf-code'),
                'dummysyntax'  => __('DummySyntax', 'acf-code'),
                'eiffel'       => __('Eiffel', 'acf-code'),
                'ejs'          => __('EJS', 'acf-code'),
                'elixir'       => __('Elixir', 'acf-code'),
                'elm'          => __('Elm', 'acf-code'),
                'erlang'       => __('Erlang', 'acf-code'),
                'forth'        => __('Forth', 'acf-code'),
                'ftl'          => __('FreeMarker', 'acf-code'),
                'gcode'        => __('Gcode', 'acf-code'),
                'gherkin'      => __('Gherkin', 'acf-code'),
                'gitignore'    => __('Gitignore', 'acf-code'),
                'glsl'         => __('Glsl', 'acf-code'),
                'golang'       => __('Go', 'acf-code'),
                'groovy'       => __('Groovy', 'acf-code'),
                'haml'         => __('HAML', 'acf-code'),
                'handlebars'   => __('Handlebars', 'acf-code'),
                'haskell'      => __('Haskell', 'acf-code'),
                'haxe'         => __('haXe', 'acf-code'),
                'html'         => __('HTML', 'acf-code'),
                'html_ruby'    => __('HTML (Ruby)', 'acf-code'),
                'ini'          => __('INI', 'acf-code'),
                'io'           => __('Io', 'acf-code'),
                'jack'         => __('Jack', 'acf-code'),
                'jade'         => __('Jade', 'acf-code'),
                'java'         => __('Java', 'acf-code'),
                'javascript'   => __('JavaScript', 'acf-code'),
                'json'         => __('JSON', 'acf-code'),
                'jsoniq'       => __('JSONiq', 'acf-code'),
                'jsp'          => __('JSP', 'acf-code'),
                'jsx'          => __('JSX', 'acf-code'),
                'julia'        => __('Julia', 'acf-code'),
                'latex'        => __('LaTeX', 'acf-code'),
                'lean'         => __('Lean', 'acf-code'),
                'less'         => __('LESS', 'acf-code'),
                'liquid'       => __('Liquid', 'acf-code'),
                'lisp'         => __('Lisp', 'acf-code'),
                'livescript'   => __('LiveScript', 'acf-code'),
                'logiql'       => __('LogiQL', 'acf-code'),
                'lsl'          => __('LSL', 'acf-code'),
                'lua'          => __('Lua', 'acf-code'),
                'luapage'      => __('LuaPage', 'acf-code'),
                'lucene'       => __('Lucene', 'acf-code'),
                'makefile'     => __('Makefile', 'acf-code'),
                'markdown'     => __('Markdown', 'acf-code'),
                'mask'         => __('Mask', 'acf-code'),
                'matlab'       => __('MATLAB', 'acf-code'),
                'mel'          => __('MEL', 'acf-code'),
                'mushcode'     => __('MUSHCode', 'acf-code'),
                'mysql'        => __('MySQL', 'acf-code'),
                'nix'          => __('Nix', 'acf-code'),
                'objectivec'   => __('Objective-C', 'acf-code'),
                'ocaml'        => __('OCaml', 'acf-code'),
                'pascal'       => __('Pascal', 'acf-code'),
                'perl'         => __('Perl', 'acf-code'),
                'pgsql'        => __('pgSQL', 'acf-code'),
                'php'          => __('PHP', 'acf-code'),
                'powershell'   => __('Powershell', 'acf-code'),
                'praat'        => __('Praat', 'acf-code'),
                'prolog'       => __('Prolog', 'acf-code'),
                'properties'   => __('Properties', 'acf-code'),
                'protobuf'     => __('Protobuf', 'acf-code'),
                'python'       => __('Python', 'acf-code'),
                'r'            => __('R', 'acf-code'),
                'rdoc'         => __('RDoc', 'acf-code'),
                'rhtml'        => __('RHTML', 'acf-code'),
                'ruby'         => __('Ruby', 'acf-code'),
                'rust'         => __('Rust', 'acf-code'),
                'sass'         => __('SASS', 'acf-code'),
                'scad'         => __('SCAD', 'acf-code'),
                'scala'        => __('Scala', 'acf-code'),
                'scheme'       => __('Scheme', 'acf-code'),
                'scss'         => __('SCSS', 'acf-code'),
                'sh'           => __('SH', 'acf-code'),
                'sjs'          => __('SJS', 'acf-code'),
                'smarty'       => __('Smarty', 'acf-code'),
                'snippets'     => __('snippets', 'acf-code'),
                'soy_template' => __('Soy Template', 'acf-code'),
                'space'        => __('Space', 'acf-code'),
                'sql'          => __('SQL', 'acf-code'),
                'stylus'       => __('Stylus', 'acf-code'),
                'svg'          => __('SVG', 'acf-code'),
                'tcl'          => __('Tcl', 'acf-code'),
                'tex'          => __('Tex', 'acf-code'),
                'text'         => __('Text', 'acf-code'),
                'textile'      => __('Textile', 'acf-code'),
                'toml'         => __('Toml', 'acf-code'),
                'twig'         => __('Twig', 'acf-code'),
                'typescript'   => __('Typescript', 'acf-code'),
                'vala'         => __('Vala', 'acf-code'),
                'vbscript'     => __('VBScript', 'acf-code'),
                'velocity'     => __('Velocity', 'acf-code'),
                'verilog'      => __('Verilog', 'acf-code'),
                'vhdl'         => __('VHDL', 'acf-code'),
                'xml'          => __('XML', 'acf-code'),
                'xquery'       => __('XQuery', 'acf-code'),
                'yaml'         => __('YAML', 'acf-code'),
                'django'       => __('Django', 'acf-code'),
            ],
        ]);

        acf_render_field_setting($field, [
            'label'             => __('Theme', 'acf-code'),
            'instructions'      => __('Theme to use for highlighting.', 'acf-code'),
            'type'              => 'select',
            'name'              => 'theme',
            'choices'           => [
                __('Bright', 'acf-code') => [
                    'chrome'          => __('Chrome', 'acf-code'),
                    'clouds'          => __('Clouds', 'acf-code'),
                    'crimson_editor'  => __('Crimson Editor', 'acf-code'),
                    'dawn'            => __('Dawn', 'acf-code'),
                    'dreamweaver'     => __('Dreamweaver', 'acf-code'),
                    'eclipse'         => __('Eclipse', 'acf-code'),
                    'github'          => __('GitHub', 'acf-code'),
                    'solarized_light' => __('Solarized Light', 'acf-code'),
                    'textmate'        => __('TextMate', 'acf-code'),
                    'tomorrow'        => __('Tomorrow', 'acf-code'),
                    'xcode'           => __('XCode', 'acf-code'),
                    'kuroir'          => __('Kuroir', 'acf-code'),
                    'katzenmilch'     => __('KatzenMilch', 'acf-code'),
                ],
                __('Dark', 'acf-code') => [
                    'ambiance'                => __('Ambiance', 'acf-code'),
                    'chaos'                   => __('Chaos', 'acf-code'),
                    'clouds_midnight'         => __('Clouds Midnight', 'acf-code'),
                    'cobalt'                  => __('Cobalt', 'acf-code'),
                    'idle_fingers'            => __('idle Fingers', 'acf-code'),
                    'kr_theme'                => __('krTheme', 'acf-code'),
                    'merbivore'               => __('Merbivore', 'acf-code'),
                    'merbivore_soft'          => __('Merbivore Soft', 'acf-code'),
                    'mono_industrial'         => __('Mono Industrial', 'acf-code'),
                    'monokai'                 => __('Monokai', 'acf-code'),
                    'pastel_on_dark'          => __('Pastel on dark', 'acf-code'),
                    'solarized_dark'          => __('Solarized Dark', 'acf-code'),
                    'terminal'                => __('Terminal', 'acf-code'),
                    'tomorrow_night'          => __('Tomorrow Night', 'acf-code'),
                    'tomorrow_night_blue'     => __('Tomorrow Night Blue', 'acf-code'),
                    'tomorrow_night_bright'   => __('Tomorrow Night Bright', 'acf-code'),
                    'tomorrow_night_eighties' => __('Tomorrow Night 80s', 'acf-code'),
                    'twilight'                => __('Twilight', 'acf-code'),
                    'vibrant_ink'             => __('Vibrant Ink', 'acf-code'),
                ],
            ],
        ]);
    }

    /*
    *  render_field()
    *
    *  Create the HTML interface for your field
    *
    *  @param	$field (array) the $field being rendered
    *
    *  @type	action
    *  @since	3.6
    *  @date	23/01/13
    *
    *  @param	$field (array) the $field being edited
    *  @return	n/a
    */

    public function render_field($field) {

        /*
        *  Create a simple text input using the 'font_size' setting.
        */

        ?>
        <textarea class="hidden" name="<?= esc_attr($field['name']) ?>" data-language="<?= $field['language']; ?>" data-theme="<?= $field['theme']; ?>"></textarea>
        <div class="editor" style="width: 100%;"><?= esc_html($field['value']); ?></div>
		<?php
    }

    /*
    *  input_admin_enqueue_scripts()
    *
    *  This action is called in the admin_enqueue_scripts action on the edit screen where your field is created.
    *  Use this action to add CSS + JavaScript to assist your render_field() action.
    *
    *  @type	action (admin_enqueue_scripts)
    *  @since	3.6
    *  @date	23/01/13
    *
    *  @param	n/a
    *  @return	n/a
    */

    public function input_admin_enqueue_scripts() {

        $dir = plugin_dir_url(__FILE__);

        // register & include JS
        wp_register_script('ace', "{$dir}third-party/ace-builds/src-min-noconflict/ace.js");
        wp_register_script('acf-input-code', "{$dir}js/input.js", ['ace']);
        wp_enqueue_script('acf-input-code');

    }
}

// create field
new acf_field_code();
