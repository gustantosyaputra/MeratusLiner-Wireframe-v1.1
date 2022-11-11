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
      mode: 'popup',
      allowUpdating: true,
      allowDeleting: true,
      allowAdding: true,
      useIcons: true,
      newRowPosition: 'last',
      popup: {
        title: 'Vessel Info',
        showTitle: true,
        width: 400,
        height: 210,
      },
      form: {
        items: [{
          itemType: 'group',
          colCount: 2,
          colSpan: 2,
          items: [{
            dataField: 'VSLCode',
            colSpan: 2,
          }],
        }],
      },
    },
    export: {
      enabled: true,
    },
    rowAlternationEnabled: true,
    columns: [{
      dataField: 'VSLCode',
      caption: 'VSL Code *',
      lookup: {
        dataSource: vslCode,
        displayExpr: 'Name',
        valueExpr: 'ID',
      },
      // width: 70,
    }, {
      dataField: 'VSLName',
      caption: 'VSL Name #',
      // width: 100,
    }, {
      dataField: 'TEUS',
      caption: 'TEUS #'
      // width: 50,
    }, {
      dataField: 'DWT',
      caption: 'DWT #',
      // width: 50,
    }, {
      dataField: 'MaxCargoCapacity',
      caption: 'Max. Cargo Capacity #'
      // width: 50,
    }, {
      dataField: 'Speed',
      caption: 'Speed #',
      // width: 50,
    }],
  });
});

$(() => {
  $('#proformaCreationContainer').dxDataGrid({
    dataSource: proforma,
    columnHidingEnabled: false,
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
      mode: 'popup',
      allowUpdating: true,
      allowDeleting: true,
      allowAdding: true,
      useIcons: true,
      newRowPosition: 'last',
      popup: {
        title: 'Proforma Creation',
        showTitle: true,
        width: 1000,
        height: 385,
      },
      form: {
        items: [{
          itemType: 'group',
          colCount: 2,
          colSpan: 3,
          items: ['Port', 'Terminal', 'Dir'],
        }, {
          itemType: 'group',
          colCount: 3,
          colSpan: 3,
          caption: 'EOP',
          items: ['vdEOP', 'timeEOP', 'dayEOP'],
        }, {
          itemType: 'group',
          colCount: 2,
          colSpan: 2,
          items: ['Moves', 'IdleTime', 'SeaTime', 'TurnPort']
        }],
      },
    },
    export: {
      enabled: false,
    },
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
      lookup: {
        dataSource: dir,
        displayExpr: 'Name',
        valueExpr: 'ID',
      },
      // width: 50,
    }, {
      caption: 'EOP',
      alignment: 'center',
      // dataType: 'date',
      columns: [{
        dataField: 'vdEOP',
        caption: 'Voy. Day#',
        dataType: 'text',
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
        $('<div>')
          .addClass('master-detail-caption')
          .text(`Calculated Results: `)
          .appendTo(container);

        $('<div>')
          .dxDataGrid({
            columnAutoWidth: true,
            showBorders: true,
            columns:
            [{
              dataField: 'TimeZone',
              caption: 'Time Zone #',
              // width: 100,
            }, {
              dataField: 'BerthTime',
              caption: 'Berth Time #',
              dataType: 'time',
              // width: 120,
            }, {
              dataField: 'OpsProd',
              caption: 'Ops. Prod. #',
              dataType: '',
              alignment: 'center',
              // width: 100,
            }, {
              dataField: 'Canal',
              caption: 'Canal #',
              dataType: '',
              alignment: 'center',
              // width: 100,
            }, {
              caption: 'Unberth',
              dataType: '',
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
              }]
            }, {
              dataField: 'FAOP',
              caption: 'FAOP #',
              dataType: 'number',
              // width: 100,
            }, {
              caption: 'Manuvering',
              dataType: 'number',
              // width: 100,
              columns: [{
                dataField: 'distanceMV',
                caption: 'Distance #',
                // width: 100
              }, {
                dataField: 'timeMV',
                caption: 'Time #',
                // width: 100
              }],
            }, {
              dataField: 'qqMiles',
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
