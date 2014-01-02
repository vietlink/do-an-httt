/**
 * @license Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	 config.language = 'en';
         
	 //config.uiColor = '#AADC6E';
        config.extraPlugins = 'uploadcare';
        //config.extraPlugins = 'slideshow';
        config.doksoft_templates_columns = 3; // How much columns use to show in the combobox
        config.doksoft_templates_use_builtins = true; // Use built-in templates or not
        config.doksoft_templates = [
            {'{path}/img/your_img1.png': '<div>Some code 1</div>'},
            {'{path}/img/your_img2.png': '<div>Some code 2</div>'}]; // Custom templates
        config.filebrowserImageBrowseUrl = '/kcfinder/browse.php?type=images';
        config.filebrowserImageUploadUrl = '/kcfinder/upload.php?type=images';
};

