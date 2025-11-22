  const confirmBox = document.getElementById('confirmBox');
  const popupBox = document.getElementById('popupBox');

  function openConfirm() {
    confirmBox.style.display = 'flex';
  }

  function closeConfirm() {
    confirmBox.style.display = 'none';
  }

  function showPopup() {
    confirmBox.style.display = 'none';
    popupBox.style.display = 'flex';
  }

  function closePopup() {
    popupBox.style.display = 'none';
  }