if(window.Cluster){
Cluster.Symbol=ClusterSymbol;
ClusterSymbol.IconScale=function(sum){
   return 20+(5*Math.log(sum)/Math.log(2));
};
ClusterSymbol.IconStyle=function(name){
   //expect to be bound to ClusterSymbol object
   if(name=="hover"){

      return {
			path: google.maps.SymbolPath.CIRCLE,
			fillColor:"#FDF569",
			fillOpacity:0.7,
			strokeWeight:1.5,
			strokeColor:"#000000",
			labelOrigin:google.maps.Point(0, 0)
      };


   }else{
   

      return {
		path: google.maps.SymbolPath.CIRCLE,
		fillColor:"#FDF569",
		fillOpacity:0.4,
		strokeWeight:1.5,
		strokeColor:"#000000",
		labelOrigin:google.maps.Point(0, 0)

	};

   }

};
}else{
    setTimeout(start,100);
}