fetch("https://ipinfo.io/json?token=ef817ab351fcc7").then(
  (response) => response.json()
).then(
  (jsonResponse) => console.log(jsonResponse.ip, jsonResponse.country)
)


let inp =  document.querySelector('#inp');

if (inp == null){

    console.log("Enter A valid ip");

}