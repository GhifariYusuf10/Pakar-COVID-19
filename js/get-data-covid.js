$.ajax({
    url: "https://api.kawalcorona.com/indonesia/",
    dataType: 'json',
    success: function (result) {
        var positif = result[0].positif.replace(/\,/g, '');
        var sembuh = result[0].sembuh.replace(/\,/g, '');
        var meninggal = result[0].meninggal.replace(/\,/g, '');
        
        $("#data-terkonfirmasi").html(positif);
        $("#data-sembuh").html(sembuh);
        $("#data-meninggal").html(meninggal);
        
        var perawatan = parseInt(positif) - (parseInt(sembuh) + parseInt(meninggal));

        $("#data-dalam-perawatan").html(perawatan);
    }
});