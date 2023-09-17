document.addEventListener('DOMContentLoaded', function() {
  const listItems = document.querySelectorAll('.list-group-items');

  listItems.forEach(item => {
      item.addEventListener('click', function() {
          // Remove the 'active' class from all items
            const id1 = $(this).data('id1');
            const id2 = $(this).data('id2');

            listItems.forEach(item => {
                item.classList.remove('active');
            });

            this.classList.add('active');
            $.ajax({
                type: 'GET',
                url: '/product/' + id2 + '/' + id1,
                dataType: 'json',
                success: function(data) {
                    displayList(data);
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching data:', error);
                }
            })
      });
        function displayList(data) {
            const listContainer = $('#dataContainer');
            var tempData = null;
            listContainer.empty();
            $.each(data, function(key, item) {
                tempData = item;
            });
            $.each(tempData, function(key, item) {
                const listItem = $('<div>').addClass('col list-group-item bg-transparent'); 
                const image = $('<img>').attr('src', '/image/' + item.image).addClass('img-product');
                const content = $('<div>').addClass('content-product');
                const title = $('<div>').text(item.name).addClass('mt-3 title-product');
                const desc = $('<div>').text(item.detail).addClass('desc-product');
                content.append(title, desc);
                listItem.append(image, content);
                listContainer.append(listItem);
            });
        }
  });
});
