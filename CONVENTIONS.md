# Conventies

## Variabelen namen
De variabelen namen die in dit project gehanteerd worden zijn geschreven in het Engels en maken genruik van lowerCamelCase. Maak gebruik van een logische naamgeving. Moet je bijvoorbeeld file naam van de image opslaan in een varibable? "imageFileName" zou in dit geval dan een goed voorbeeld zijn. 

if ($request->hasFile('images')) {
    $imageFileNames = [];

    foreach ($request->file('images') as $image) {
        // Genereer een unieke bestandsnaam voor elke afbeelding
        $newImageFileName = $image->getClientOriginalName();

        // Sla de afbeelding op met de nieuwe bestandsnaam
        $image->storeAs('images', $newImageFileName);

        $imageFileNames[] = $newImageFileName;
    }
} else {
    // Als er geen nieuwe afbeeldingen zijn geüpload, behoud de bestaande afbeeldingsnamen
    $imageFileNames = $post->images->pluck('fileName')->toArray();
}

## Inspringen
Zorg er voor dat er duidelijk te zien is wat wat is en waar dit eindigt. Dit doen we door in te springen. Zie voorbeeld hierboven.

## Github
Zodra je een userstorie hebt gemaakt zet je dit in Github zodat alle bestanden teruggehaald kunnen worden. Gebruik hier ook duidelijke en logische titels voor.

