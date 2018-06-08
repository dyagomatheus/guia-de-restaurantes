<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<form id="form">
    <input type="text" name="name" value="Erik's bar">
    <input type="text" name="description" value="Melhor Wiski da região">
    <input type="file" name="photo" id="file">
</form>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script type="text/javascript">
  $('#file').on('change', function () {
    let formData = new FormData();
    formData.append('name', 'Erik\'s bar');
    formData.append('description', 'Melhor Wiski da região');
    formData.append('photo', $('#file')[0].files[0]);
    let headers = {
      'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjU4NmMxZTg1YmZjNjY4YmQ1ZGQwYjk2ZWIyNTg5NTZhYWM4OTE2YTBiYWIzYWUzZjI3ZGVhZTk2MTJhYzE5ZWM3OWQwODIzMDVhMWU2YTQ4In0.eyJhdWQiOiIzIiwianRpIjoiNTg2YzFlODViZmM2NjhiZDVkZDBiOTZlYjI1ODk1NmFhYzg5MTZhMGJhYjNhZTNmMjdkZWFlOTYxMmFjMTllYzc5ZDA4MjMwNWExZTZhNDgiLCJpYXQiOjE1MjgwNzYzOTMsIm5iZiI6MTUyODA3NjM5MywiZXhwIjoxNTU5NjEyMzkyLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.S7CX4bqHCJRhzxtKPvk9O7O7havTFHeHUqWBBNHkcsnfvUFKnM1Fbn8F0KVUAbgDEenAEHlOBl69qM5pb88Oh6HLyQfE8RNv7wfhtZqaqXEJvC7kCVR9gfUmiL5xSCVklT8ZRfJPNuWtunXRjfvEfTwa0vw-de0Ufo1Y5Vw6Kclx8H9jsr2UVdw0WEQBOzSEw1JlchrVhx7eqYyE6c3fH6SuBmHGsR5uyBLK_u5rKD1mLAMytHqI7A6KrgFCktoEFEYv4FW2XsPqWH-z6BkXKTW7D_od5Sn9Q00B3wI7OiebMbr_QacOT0DWggQzZTf8MHLMXJ0QufEmYT9o0GPP9npn9IDdMC-UIxU9po-NzaY0nDIoxJm3XjR_ZAgLMAwOllckBO4SpTwRLOVvXs9huyRteu5QQ6QHcoXXkAKazLw2-BOpigN3YNPOZpolsDYfGVBykdgnA6A7EkXM3IF4LrVKM0QhtPBeYd6wQJN76_po4FB4Jy6jJNoEcmbXSr0wS-QHNtv3UfTP38s_FDikg9nXjOAQjSJChIzrFzRNyAap7X4v80gFcyPsr5TaaYvD9URHuGRWUbPpdKcTQEBBDEOorqfzdxy1gnw3UdUJwJRy6lrNZWRBlM14UTspHdyS7A_6295BzZWh-tDMlFpyF4TV761gE4rIvPR6VPJd0JY',
      //'content-type': 'multipart/form-data'
      'content-type': 'application/x-www-form-urlencoded'
    }
    axios.post('http://localhost:8000/api/v1/restaurants/4', formData, {headers: headers})
  })
</script>
</body>
</html>