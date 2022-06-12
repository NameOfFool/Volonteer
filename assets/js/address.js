async function getAddress(query) {
    let url = "https://suggestions.dadata.ru/suggestions/api/4_1/rs/suggest/address";
    let token = "ed27e055692e54b05238512c9a592391ec457128";
    let options = {
        method: "POST",
        mode: "cors",
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json",
            "Authorization": "Token " + token
        },
        body: JSON.stringify({query: query})
    }
    let address="err"
    let x = await fetch(url, options)
        .then(response => response.text())
        .then(result => {
            address = result
        })
        .catch(error => console.log("error", error));
    let arr = JSON.parse(address);
    return arr;
}
$(document).ready(function(){
    $("#locality").keydown(kd)
})
function kd()
{
    let a = getAddress($("#locality").val()).then(response=> {
        $("#loc").empty()
        for(let i of response["suggestions"])
            $("#loc").append("<option value='"+ i.value +"'>")
        $('#loc').show().focus();
    })

}