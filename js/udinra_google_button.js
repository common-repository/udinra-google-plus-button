(function () {
    'use strict';

    tinymce.PluginManager.add('Udinra_Google_subscribe', function (editor, url) {
        editor.addButton('Udinra_Google_subscribe', {
            title: 'Udinra Google Button',
            image: url + '/../image/gcon.png',

            onclick: function () {
                editor.windowManager.open({
                    title: 'Udinra Google Plus Configuration',
                    body: [
                        {
                            type: 'listbox',
                            name: 'size',
                            label: 'Size',
                            values: [
                                {text: 'Small', value: 'small'},
                                {text: 'Medium', value: 'medium'},
                                {text: 'Standard', value: 'standard'},
                                {text: 'Tall', value: 'tall'}								
                            ]
                        },
                        {
                            type: 'listbox',
                            name: 'annotation',
                            label: 'Annotation',
                            values: [
								{text: 'None', value: 'none'},
								{text: 'Bubble', value: 'bubble'},
								{text: 'Inline', value: 'inline'}								
                            ]
                        },
                        {
                            type: 'listbox',
                            name: 'style',
                            label: 'Style',
                            values: [
                                {text: 'Aqua', value: 'UdinraGoogleAqua'},
								{text: 'Teal', value: 'UdinraGoogleTeal'},
								{text: 'Chocolate', value: 'UdinraGoogleChocolate'},
								{text: 'Coral', value: 'UdinraGoogleCoral'},
								{text: 'Golden', value: 'UdinraGoogleGolden'},
								{text: 'Pink', value: 'UdinraGooglePink'},
								{text: 'Green 1', value: 'UdinraGoogleLightGreen'},
								{text: 'Green 2', value: 'UdinraGoogleSeaGreen'},
								{text: 'Grey', value: 'UdinraGoogleGrey'},
								{text: 'Tan', value: 'UdinraGoogleTan'},
								{text: 'White', value: 'UdinraGoogleWhite'},
								{text: 'None', value: 'UdinraGoogleNone'}																
                            ]
                        },				
						{
                            type: 'textbox',
							size: 40,
                            name: 'like',
                            label: 'Plusone URL',
                        },					
						{
                            type: 'textbox',
							size: 40,
                            name: 'header',
                            label: 'Header Text',
                        },								
						{
                            type: 'textbox',
							size: 40,
                            name: 'body',
                            label: 'Body Text',
                        }
                    ],
                    onsubmit: function (e) {
                        editor.insertContent('[Udinra_Google ' + ' size=' + e.data.size +
                        ' style=' + e.data.style + 
						'" header="' + e.data.header + '" body="' + e.data.body + '" annotation="' + e.data.annotation + 
						'" like="' + e.data.like + '"]' );
                    }
                });
            }
        });
    });
})();


