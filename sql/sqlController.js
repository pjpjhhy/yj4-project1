export const sqlController = async (obj) => {
  try{
    return fetch("./sql/sqlHandle.php", {
              "method": "POST",
              "headers": {
                  "Content-Type": "application/json; charset=utf-8"
              },
              "body": JSON.stringify(obj)
            })
            .then(res => res.json())
            .then(data => data);            
  }catch(err) {
    console.log(`Error: ${err}`);
  }
}