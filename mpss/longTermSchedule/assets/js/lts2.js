$(() => {
  $('#gridContainer').dxDataGrid({
    dataSource: customers,
    keyExpr: 'ID',
    columns: ['Vessel', 'VesselOperator', 'VesselCode', 'Voyage', 'IDJKTETA','IDKIDETA','IDPWGETA','IDJKTTETA','TrvLength','REMARKS'],
    showBorders: true,
    paging: {
        pageSize: 12,
      },  
      pager: {
        visible: true,
        allowedPageSizes: [5, 10, 'all'],
        showPageSizeSelector: true,
        showInfo: true,
        showNavigationButtons: true,
      },
  });
});