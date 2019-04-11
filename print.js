/*--This JavaScript method for Print command--*/
    function PrintDoc() {
        var toPrint = document.getElementById('printSection');
        var popupWin = window.open('', '_blank', 'width=750,height=650,location=no,left=200px');
        popupWin.document.open();
        popupWin.document.write('<html><title>::Preview::</title></head><body onload="window.print()">')
        popupWin.document.write(toPrint.innerHTML);
        popupWin.document.write('</html>');
        popupWin.document.close();
    }
/*--This JavaScript method for Print Preview command--*/
    function PrintPreview() {
        var toPrint = document.getElementById('printSection');
        var popupWin = window.open('', '_blank', 'width=550,height=350,location=no,left=200px');
        popupWin.document.open();
        popupWin.document.write('<html><title>::Print Preview::</title></head><body">')
        popupWin.document.write(toPrint.innerHTML);
        popupWin.document.write('</html>');
        popupWin.document.close();
    }