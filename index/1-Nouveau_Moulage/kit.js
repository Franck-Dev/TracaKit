class Kit {
    constructor(refSap, workOrder, shelfLifeDate, layUpLimDate, curingLimDate) {
        this.refSap = refSap;
        this.workOrder = workOrder;
        this.shelfLifeDate = shelfLifeDate;
        this.layUpLimDate = layUpLimDate;
        this.curingLimDate = curingLimDate;
    }
    set refSap(ref){this._refSap = ref;}
    get refSap(){return this._refSap;}

    registerInBase(numOt, numMolding) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            //document.getElementById("txtHint").innerHTML = this.responseText;
          }
        };
        xmlhttp.open("GET",'1-Nouveau_Moulage/BDDKitScript.php?of=' + this.workOrder + '&refSap=' + this.refSap + '&ot=' + numOt + '&dateDra=' + this.layUpLimDate.toISOString().slice(0, 19).replace('T', ' ') + '&datePol=' + this.curingLimDate.toISOString().slice(0, 19).replace('T', ' ') + '&date18=' + this.shelfLifeDate.toISOString().slice(0, 19).replace('T', ' '),true);
        //xmlhttp.open("GET",'1-Nouveau_Moulage/BDDKitScript.php?of=1&refSap=2&ot=3&dateDra=4&datePol=5&date18=6',true);
        xmlhttp.send();
        
    
    
    
    }
    // set workOrder(workOrder){this.workOrder = workOrder;}
    // get workOrder(){return this.workOrder;}

    //set shelfLifeDate(shelfLifeDate){this._shelfLifeDate = shelfLifeDate;}
    //get shelfLifeDate(){return this._shelfLifeDate;}

    // set layUpLimDate(layUpLimDate){this.layUpLimDate = layUpLimDate;}
    // get layUpLimDate(){return this.layUpLimDate;}

    // set curingLimDate(curingLimDate){this.curingLimDate = curingLimDate;}
    // get curingLimDate(){return this.curingLimDate;}
}
