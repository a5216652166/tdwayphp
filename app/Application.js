/**
 * 
 */
Ext.application({
    name: 'Duyun',
    autoCreateViewport: true,
//    models: ['PieChart'],
//    stores: ['PieChart'],
//    controllers: ['PieChart'],
    models: ['RealMonitor', 'PieChart', 'ColumnChart'],
    stores: ['RealMonitor', 'PieChart', 'ColumnChart'],
    controllers: ['RealMonitor', 'PieChart', 'ColumnChart'],
    launch: function() {
        // This is fired as soon as the page is ready
    }
});