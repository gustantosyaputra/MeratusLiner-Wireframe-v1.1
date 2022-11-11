$(() => {
  $('#vesselInfoContainer').dxDataGrid({
    dataSource: vessel,
    columnAutoWidth: true,
    columnHidingEnabled: true,
    paging: {
      pageSize: 5,
    },
    pager: {
      showPageSizeSelector: true,
      allowedPageSizes: [5, 10, 15, 20],
    },
    showBorders: true,
    repaintChangesOnly: true,
    columnAutoWidth: true,
    // filterRow: {
    //   visible: true,
    //   applyFilter: 'auto',
    // },
    searchPanel: {
      visible: true,
      width: 240,
      placeholder: 'Search...',
    },
    headerFilter: {
      visible: true,
      allowSearch: true,
    },
    editing: {
      mode: 'batch',
      allowUpdating: true,
      allowDeleting: true,
      allowAdding: true,
      useIcons: true,
      newRowPosition: 'last',
    },
    export: {
      enabled: true,
    },
    rowAlternationEnabled: true,
    columns: [{
      dataField: 'VSLCode',
      caption: 'VSL Code *',
      // width: 70,
    }, {
      dataField: 'VSLName',
      caption: 'VSL Name #',
      allowEditing: false
      // width: 100,
    }, {
      dataField: 'TEUS',
      caption: 'TEUS #',
      allowEditing: false
      // width: 50,
    }, {
      dataField: 'DWT',
      caption: 'DWT #',
      allowEditing: false
      // width: 50,
    }, {
      dataField: 'MaxCargoCapacity',
      caption: 'Max. Cargo Capacity #',
      allowEditing: false,
      // width: 50,
    }, {
      dataField: 'Speed',
      caption: 'Speed #',
      allowEditing: false
      // width: 50,
    }],

  });
});

$(() => {
  $('#proformaCreationContainer').dxDataGrid({
    dataSource: proforma,
    columnHidingEnabled: true,
    keyExpr: 'ID',
    paging: {
      pageSize: 5,
    },
    pager: {
      showPageSizeSelector: true,
      allowedPageSizes: [5, 10, 15, 20],
    },
    showBorders: true,
    allowColumnResizing: true,
    columnAutoWidth: true,
    // filterRow: {
    //   visible: true,
    //   applyFilter: 'auto',
    // },
    searchPanel: {
      visible: true,
      width: 240,
      placeholder: 'Search...',
    },
    headerFilter: {
      visible: true,
      allowSearch: true,
    },
    editing: {
      mode: 'batch',
      allowUpdating: true,
      allowDeleting: true,
      allowAdding: true,
      useIcons: true,
      newRowPosition: 'last',
    },
    // export: {
    //   enabled: true,
    // },
    rowAlternationEnabled: true,
    columns: [{
      dataField: 'Port',
      caption: 'Port *',
      // width: 70,
    }, {
      dataField: 'Terminal',
      caption: 'Terminal *',
      // width: 100,
    }, {
      dataField: 'Dir',
      caption: 'Dir *',
      // width: 50,
    }, {
      caption: 'EOP',
      alignment: 'center',
      // dataType: 'date',
      columns: [{
        dataField: 'vdEOP',
        caption: 'Voy. Day #',
        dataType: 'number',
        allowEditing: false,
        // width: 100,
      }, {
        dataField: 'timeEOP',
        caption: 'Time',
        // width: 100,
      }, {
        dataField: 'dayEOP',
        caption: 'Day',
        // width: 100,
      }],
    }, {
      dataField: 'Moves',
      caption: 'Moves *',
      dataType: 'number',
      // width: 100,
    }, {
      dataField: 'IdleTime',
      caption: 'Idle Time *',
      dataType: 'number',
      // width: 100,
    }, {
      dataField: 'PortStay',
      caption: 'Port Stay #',
      dataType: 'number',
      allowEditing: false,
      // width: 100,
    }, {
      dataField: 'SeaTime',
      caption: 'Sea Time *',
      dataType: 'number',
      // width: 100,
    }, {
      dataField: 'SeaSpeed',
      caption: 'Sea Speed #',
      dataType: 'number',
      allowEditing: false,
      // width: 100,
    }, {
      dataField: 'TurnPort',
      caption: 'Turn Port *',
      dataType: 'boolean',
      // width: 100,
    }],

    masterDetail: {
      enabled: true,
      template(container, options) {
        const currentProformaData = options.data;

        // $('<div>')
        //   .addClass('master-detail-caption')
        //   .number(`Voyage Proforma ${currentProformaData.ID} Details: `)
        //   .appendTo(container);

        $('<div>')
          .dxDataGrid({
            columnAutoWidth: true,
            showBorders: true,
            columns:
              [{
                dataField: 'TimeZone',
                caption: 'Time Zone #',
                // dataType: 'number',
                // alignment: 'center',
                // width: 100,
              }, {
                dataField: 'BerthTime',
                caption: 'Berth Time #',
                // width: 120,
              }, {
                dataField: 'OpsProd',
                caption: 'Ops. Prod. #',
                // alignment: 'center',
                // width: 100,
              }, {
                dataField: 'Canal',
                caption: 'Canal #',
                // alignment: 'center',
                // width: 100,
              }, {
                caption: 'Unberth',
                alignment: 'center',
                columns: [{
                  dataField: 'vdUnberth',
                  caption: 'Voy. Day #',
                  // width: 100,
                }, {
                  dataField: 'timeUnberth',
                  caption: 'Time #',
                  // width: 100,
                }, {
                  dataField: 'dayUnberth',
                  caption: 'Day #',
                  // width: 100,
                }],
              }, {
                dataField: 'FAOP',
                caption: 'FAOP #',
                // alignment: 'center',
                // width: 100,
              }, {
                caption: 'Manuvering',
                alignment: 'center',
                columns: [{
                  dataField: 'distanceMV',
                  caption: 'Distance #',
                  // alignment: 'center',
                  // width: 20
                }, {
                  dataField: 'timeMV',
                  // alignment: 'center',
                  caption: 'Time #',
                  // width: 20
                }],
              }, {
                dataField: 'qqMiles',
                dataType: 'number',
                caption: 'Q/Q Miles #',
                // width: 100
              }, {
                dataField: 'departDays',
                caption: 'Days to Departure #',
                // width: 100
              }, {
                dataField: 'PTPDays',
                caption: 'Port to Port Days #',
                // width: 100
              }],

            dataSource: new DevExpress.data.DataSource({
              store: new DevExpress.data.ArrayStore({
                key: 'ID',
                data: proformaDetails,
              }),
              filter: ['ProformaID', '=', options.key],
            }),
          }).appendTo(container);
      },
    },
    summary: {
      recalculateWhileEditing: true,
      totalItems: [{
        column: 'Port',
        summaryType: 'count',
      }, {
        column: 'Moves',
        caption: 'Moves',
        summaryType: 'sum',
      }, {
        column: 'PortStay',
        summaryType: 'sum',
      }],
    },
  });
});


