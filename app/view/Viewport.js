/**
 * 
 */
Ext.define('Duyun.view.Viewport', {
    extend: 'Ext.container.Viewport',
    
    layout: 'border',
        
    initComponent: function() {
    	var me = this;

        Ext.applyIf(me, {
            items: [
                {
                    xtype: 'panel',
                    region: 'north',
                    border: 0,
                    height: 75,
                    id: 'pnlTop',
                    bodyCls: 'pnlTop'
                },
                {
                    xtype: 'treepanel',
                    region: 'west',
                    border: 0,
                    id: 'pnlNavigation',
                    width: 150,
                    autoScroll: true,
                    rowLines: true,
                    store: 'Navigator',
                    displayField: 'caption',
                    rootVisible: false,
                    useArrows: true,
                    viewConfig: {
                        border: 0,
                        id: 'tvNavigation'
                    }
                },
                {
                    xtype: 'panel',
                    region: 'south',
                    border: 0,
                    height: 30,
                    id: 'pnlBottom'
                },
                {
                    xtype: 'panel',
                    region: 'center',
                    border: 0,
                    id: 'pnlCenter',
                    layout: {
                        type: 'fit'
                    }
                }
            ]
        });

        me.callParent(arguments);
    }
});