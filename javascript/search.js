//prerequis --> changer l'ID "article_card" en class "article_card".

// A chaque 
// Recuperer l'input en le formatant en minuscule et le stocker dans une variable pour comparer

// Selectionner toutes les cards ".article_cards"

// Pour chacune d'entre elles comparer les "text" des éléments ayant pour classe ".card-title" et ".card-text"

//  display:none l'element parent ".article_card" de l'element en cours quand il n'y a correspondance avec aucun caractere de la variable reccueillant l'input

//  enlever display:none dans le cas contraire

// si la variable acceuillant l'input = "" alors ?



$("#searchbar").on("keyup", function() {

    const search = this.value.toLowerCase();

    $(".article_card").each(function(){
        
        const title = $(this).find(".card-title").text().toLowerCase();
        const text = $(this).find(".card-text").text().toLowerCase();

        const condition = title.includes(search) || text.includes(search);
           
        $(this).toggleClass("displayfalse", !condition);
        $(this).toggleClass("displaytrue", condition);
    });
});