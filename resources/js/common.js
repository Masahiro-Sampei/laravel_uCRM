const nl2br = (str) => { 
    var res = str.replace(/\r\n/g, "<br>"); 
    res = res.replace(/(\n|\r)/g, "<br>"); 
    return res; 
  } 

  const getToday = () => { 
    // new Date();で日付の情報を取得
    const today = new Date(); 
    // get〇〇で年月日を取れる
    const yyyy = today.getFullYear(); 
    const mm = ("0"+(today.getMonth()+1)).slice(-2); 
    const dd = ("0"+today.getDate()).slice(-2); 
    return yyyy+'-'+mm+'-'+dd; 
  } 
  55
   

  export{nl2br,getToday}