/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


  $(function(){

    $('#preview').Jcrop({
      aspectRatio: 1,
      onSelect: updateCoords,
      setSelect:   [ 100, 100, 250, 250 ],
    });

  });

  function updateCoords(c)
  {
    $('#xx').val(c.x);
    $('#yy').val(c.y);
    $('#w').val(c.w);
    $('#h').val(c.h);
  };

  function checkCoords()
  {
    if (parseInt($('#w').val())) return true;
    alert('Please select a crop region then press submit.');
    return false;
  };
