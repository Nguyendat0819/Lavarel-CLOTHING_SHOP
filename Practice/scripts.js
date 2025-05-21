
  let currentScroll = 0;
  const scrollStep = 352;
  const productList = document.getElementById('productList');

  function moveLeft() {
    currentScroll = Math.max(0, currentScroll - scrollStep);
    productList.style.transform = `translateX(-${currentScroll}px)`;
  }

  function moveRight() {
    const maxScroll = productList.scrollWidth - productList.parentElement.offsetWidth;
    currentScroll = Math.min(maxScroll, currentScroll + scrollStep);
    productList.style.transform = `translateX(-${currentScroll}px)`;
  }
  

  // cập nhật trạng thái của nút khi cuộn



// Gọi 1 lần lúc load

// làm cho phần tìm kiếm hoạt động
document.addEventListener("DOMContentLoaded", function(){
  const searchButton = document.getElementById("site_search");
  const closeButton = document.querySelector(".btn_close_search");
  const siderSearch = document.querySelector(".sider_search_show");
  // khi click vào nút tìm kiếm thì hiện ra ô tìm kiếm
  searchButton.addEventListener("click",function(){
    siderSearch.classList.add("active");    
  });
  // khi click vào nút đóng thì ẩn ô tìm kiếm
  closeButton.addEventListener("click",function(){
    siderSearch.classList.remove("active");
  })
});



