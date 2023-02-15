function initialize(){
    var LiverpoolOptions = {
        center: new google.maps.LatLng(53.408371, -2.991573),
        zoom: 12,
        mapTypeId: 'roadmap'
    };

    var NewOrleansOptions = {
        center: new google.maps.LatLng(29.951065, -90.071533),
        zoom: 10,
        mapTypeId: 'roadmap'
    }

    var map1 = new google.maps.Map(document.getElementById('LiverpoolMap'), LiverpoolOptions);
    var map2 = new google.maps.Map(document.getElementById('NOMap'), NewOrleansOptions);

    


    // Royal Albert Dock, Liverpool --------------------------------------------------------------------------------
    const RADContent = 
                '<div id="content">' +
                '<div id="siteNotice">' +
                "</div>" +
                '<h1 id="firstHeading" class="firstHeading">Royal Albert Dock</h1>' +
                '<div id="bodyContent">' +
                "<p>The Royal Albert Dock is a complex of dock buildings and warehouses in Liverpool, England." + 
                " Designed by Jesse Hartley and Philip Hardwick, it was opened in 1846.</p>" +
                '<a href="https://github.com/LiamUpstoneSmith/TwinCities/blob/master/Liverpool/LiverpoolLocations/RoyalAlbertDock.html"><button type="button">More Info</button></a>' + 
                "</div>" +
                "</div>";

    const RADInfo = new google.maps.InfoWindow({
        content: RADContent,
        ariaLabel: "Royal Dockers"
    })

    const RAD = { lat:53.399700 , lng: -2.991160};
    const  RADMarker = new google.maps.Marker({
        position: RAD,
        map: map1,
        title: "Royal Albert Docks",
    });

    RADMarker.addListener("click", () => {
        RADInfo.open({
            anchor:RADMarker,
            map: map1,
        })
    })


    // Anfield Stadium, Liverpool --------------------------------------------------------------------------------
    const AnfieldContent = 
                '<div id="content">' +
                '<div id="siteNotice">' +
                "</div>" +
                '<h1 id="firstHeading" class="firstHeading">Anfield Stadium</h1>' +
                '<div id="bodyContent">' +
                "<p>Anfield is a football stadium Home of Liverpool F.C. It has a seating capacity of 53,394, making it the seventh largest football stadium in England." + 
                " It was originally the home of Everton from 1884 to 1891, before they moved to Goodison Park after a dispute with the club president.</p>" +
                '<a href="Liverpool\LiverpoolLocations\Anfield.html"><button type="button">More Info</button></a>' + 
                "</div>" +
                "</div>";

    const AnfieldInfo = new google.maps.InfoWindow({
        content: AnfieldContent,
        ariaLabel: "Anfield"
    })

    const Anfield = { lat:53.433979 , lng: -2.950960};
    const  AnfieldMarker = new google.maps.Marker({
        position: Anfield,
        map: map1,
        title: "Anfield",
    });

    AnfieldMarker.addListener("click", () => {
        AnfieldInfo.open({
            anchor:AnfieldMarker,
            map: map1,
        })
    })

 // Uni of Liverpool ----------------------------------------------------------------------------------------------
 const UniContent = 
                '<div id="content">' +
                '<div id="siteNotice">' +
                "</div>" +
                '<h1 id="firstHeading" class="firstHeading">University of Liverpool</h1>' +
                '<div id="bodyContent">' +
                "<p>The Univerity of Liverpool is a public research university based in the city of Liverpool, england. founded as a acollege in 1881, it gained its Royal" + 
                " Charter in 1903 with theability to award degrees, and is also known to be one of the six 'red brick' civic Universities.</p>" +
                '<a href="https://github.com/LiamUpstoneSmith/TwinCities/blob/master/Liverpool/LiverpoolLocations/Uni.html"><button type="button">More Info</button></a>' + 
                "</div>" +
                "</div>";

    const UniInfo = new google.maps.InfoWindow({
        content: UniContent,
        ariaLabel: "UniversityofLiverpool"
    })

    const Uni = { lat: 53.447369 , lng: -2.986930};
    const  uniMarker = new google.maps.Marker({
        position: uni,
        map: map1,
        title: "uni",
    });

    AnfieldMarker.addListener("click", () => {
        AnfieldInfo.open({
            anchor:uniMarker,
            map: map1,
        })
    })


}
window.initialize = initialize();