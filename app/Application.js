/**
 * 
 */
Ext.application({
    name: 'Duyun',
    autoCreateViewport: true,

    models: [
        'Navigator', 
        'ColumnChart',
        'LineChart'
    ],
    stores: [
        'Navigator',
        'ColumnChart',
        'LineChart'
    ],
    controllers: [
        'Main'
    ]
});