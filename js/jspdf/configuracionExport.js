function btnDownload() {
  // obtener el tamaño de la página del informe
  var reportPageHeight = $("#report-page").innerHeight();
  var reportPageWidth = $("#report-page").innerWidth();

  // cree un nuevo objeto de lienzo que completaremos con todos los demás objetos de lienzo
  var pdfCanvas = $("<canvas />").attr({
    id: "canvaspdf",
    width: reportPageWidth,
    height: reportPageHeight,
  });

  // realizar un seguimiento de la posición del lienzo
  var pdfctx = $(pdfCanvas)[0].getContext("2d");
  var pdfctxX = 0;
  var pdfctxY = 0;
  var buffer = 100;

  // para cada gráfico chart.js
  $("#myChart").each(function (index) {
    // get the chart height/width
    var canvasHeight = $(this).innerHeight();
    var canvasWidth = $(this).innerWidth();

    // dibujar el gráfico en el nuevo lienzo
    pdfctx.drawImage($(this)[0], pdfctxX, pdfctxY, canvasWidth, canvasHeight);
    pdfctxX += canvasWidth + buffer;

    // nuestra página de informe está en un patrón de cuadrícula, así que reprodúzcalo en el nuevo lienzo
    if (index % 2 === 1) {
      pdfctxX = 0;
      pdfctxY += canvasHeight + buffer;
    }
  });

  // cree un nuevo pdf y agregue nuestro nuevo lienzo como una imagen
  var pdf = new jsPDF("l", "pt", [reportPageWidth, reportPageHeight]);

  //Propiedades del pdf
  pdf.setFontSize(16);
  pdf.setTextColor(0, 0, 0);
  pdf.setFont("helvetica");
  pdf.setFontType("bold");

  //Titulo
  pdf.text(
    reportPageWidth / 2,
    47,
    "Universidad de Nariño extensión Tumaco",
    "center"
  ); //(mover en x, mover en y)

  // Fecha
  pdf.text(
    reportPageWidth / 2,
    70,

    date,
    "center"
  ); //(mover en x, mover en y)

  //Propiedades del texto resultado
  pdf.setFontSize(13);

 

  //Propiedades del texto resultado
  pdf.setFontType("normal");

  

  // Agregar logo Udenar en el pdf
  pdf.addImage(imgLogoUdenar, "PNG", 10, 0, 145, 120); //(mover en x, mover en y, ancho, alto )

  //Agregamos la grafica
  pdf.addImage($(pdfCanvas)[0], "PNG", 450, 150); //(mover en x, mover en y)

  // descargar el pdf
  pdf.save("Test-" + userName + ".pdf");
}
