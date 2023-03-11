function generate(tipo) {
        var doc = new jsPDF('p', 'pt', 'letter');
        var htmlstring = '';
           // var table = string('#tabla_'+tipo);
           var today = new Date();
           var dd = String(today.getDate()).padStart(2, '0');
           var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
           var yyyy = today.getFullYear();
           
           today = dd + '/' + mm + '/' + yyyy;
           
            var tempVarToCheckPageHeight = 0;
            var pageHeight = 0;
            pageHeight = doc.internal.pageSize.height;
            specialElementHandlers = {
                // element with id of "bypass" - jQuery style selector  
                '#bypassme': function (element, renderer) {
                    // true = "handled elsewhere, bypass text extraction"  
                    return true
                }
            };
        
        
            margins = {
                top: 150,
                bottom: 60,
                left: 40,
                right: 40,
                width: 600
            };
        
            var y = 20;
          
            doc.setLineWidth(2);
            doc.setFontSize(20);
            doc.text(45, y = y + 50, "Reporte de " + tipo );
        
            doc.setFontSize(9);
            doc.text(45, y = y + 70, "Fecha de reporte: " + today );
        
        
            doc.autoTable({
                html: '#tabla_'+tipo,
                startY: y + 30,
                theme: 'grid',
                columnStyles: {
                    0: {
                        cellWidth: 80,
                    },
                    1: {
                        cellWidth: 80,
                    },
                    2: {
                        cellWidth: 80,
                    },
                    3: {
                        cellWidth: 80,
                    }
                    ,
                    4: {
                        cellWidth: 80,
                    }
                },
                styles: {
                    minCellHeight: 40
                }
            })
            doc.save("Reporte_"+tipo+"_"+dd+mm+yyyy+".pdf");



        }
   


