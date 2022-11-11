$(document).ready(function () {
    var validationSuccess = $("#validation-success");

    $("#lts-form1").kendoForm({
        formData: {
            LaneCode: "SBLS",
            Quarter: 1,
            EndDate: new Date(),
            NumberOfCycle: "0",
            VesselNo: "1",
            VoyageNo: 1,
            VoyageNoNumber: "1",
            Frequency: "7"
        },
        layout: "grid",
        grid: {
            cols: 1,
            gutter: 20
        },
        items: [
            {
                type: "group",
                layout: "grid",
                grid: { cols: 12, gutter: 10 },
                items: [
                    {
                        field: "LaneCode",
                        label: "Lane Code:",
                        colSpan: 3,
                        validation: { required: true }
                    },
                    {
                        field: "EndQuarter",
                        editor: "NumericTextBox",
                        label: "End Quarter:",
                        colSpan: 2,
                        validation: { required: true }
                    },
                    { 
                        field: "Quarter", 
                        label: " ",
                        editor: "DropDownList", 
                        validation: { required: true }, 
                        colSpan: 1,
                        editorOptions: {
                            dataSource: [
                                { Name: "Q1", Id: 1 },
                                { Name: "Q2", Id: 2 },
                                { Name: "Q3", Id: 3 },
                                { Name: "Q4", Id: 4 }
                            ],
                            dataTextField: "Name",
                            dataValueField: "Id"
                        }
                    },
                    {
                        field: "EndDate",
                        editor: "DatePicker",
                        label: "Expiry Date:",
                        colSpan: 3,
                        validation: {
                            required: true,
                        }
                    },
                    {
                        field: "NumberOfCycle",
                        label: "Number of Cycle:",
                        colSpan: 3,
                    },
                    /////////////////
                    {
                        field: "VesselNo",
                        label: "Vessel No.",
                        colSpan: 3,
                        validation: { required: true }
                    },
                    { 
                        field: "VoyageNo", 
                        label: "Voyage No.",
                        editor: "DropDownList", 
                        validation: { required: true }, 
                        colSpan: 2,
                        editorOptions: {
                            dataSource: [
                                { Name: "Normal", Id: 1 },
                                { Name: "Direction", Id: 2 },
                                { Name: "Sequence", Id: 3 },
                                { Name: "Butterfly", Id: 4 }
                            ],
                            dataTextField: "Name",
                            dataValueField: "Id"
                        }
                    },
                    {
                        field: "VoyageNoNumber",
                        label: " ",
                        colSpan: 1,
                        validation: { required: true }
                    },
                    {
                        field: "Frequency",
                        label: "Frequency:",
                        colSpan: 2,
                    },
                ]
            },
        ],
        validateField: function (e) {
            validationSuccess.html("");
        },
        submit: function (e) {
            e.preventDefault();
            validationSuccess.html("<div class='k-messagebox k-messagebox-success'>Form data is valid!</div>");
        },
        clear: function (ev) {
            validationSuccess.html("");
        }
    });
});