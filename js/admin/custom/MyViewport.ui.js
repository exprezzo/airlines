/*
 * File: MyViewport.ui.js
 * 
 * This file was generated by Ext Designer version 1.1.2.
 * http://www.sencha.com/products/designer/
 *
 * This file will be auto-generated each and everytime you export.
 *
 * Do NOT hand edit this file.
 */

MyViewportUi = Ext.extend(Ext.Viewport, {
    layout: 'border',
    initComponent: function() {
        this.items = [
            {
                xtype: 'panel',
                region: 'north',
                height: 40,
                border: false
            },
            {
                xtype: 'panel',
                style: 'padding:10px;',
                layout: 'fit',
                region: 'center',
                border: false,
                items: [
                    {
                        xtype: 'tabpanel',
                        activeTab: 0,
                        width: 100,
                        items: [                            
                            {
                                xtype: 'panel',
                                title: 'Tab1 ',
								html:'Ext Js con tema personalizado'
                            },
                            {
                                xtype: 'panel',
                                title: 'Tab 2'
                            },
                            {
                                xtype: 'panel',
                                title: 'Tab 3'
                            }
                        ]
                    }
                ]
            }
        ];
        MyViewportUi.superclass.initComponent.call(this);
    }
});
