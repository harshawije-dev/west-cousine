<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home Page</title>
  <link rel="stylesheet" href="/dist/output.css" />
</head>

<body>
  <div class="flex flex-row justify-center pb-10 w-full items-center">
    <h2 class="text-4xl font-bold italic text-gray-700">Signature Cousine</h2>
  </div>

  <div class="flex w-auto mx-12 h-screen flex-row border-[1px] border-slate-200 rounded-md">
    <div class="w-1/2 px-5 border-x-[0.5px]">
      <div class="flex flex-col justify-start items-center w-full py-14">
        <form action="">
          <div class="mb-6">
            <input type="text" placeholder="Add Item Name" class="form-control">
          </div>
          <div class="mb-6">
            <input type="text" placeholder="Serve Mins." class="form-control">
          </div>
          <div class="mb-6">
            <input type="number" placeholder="Price" class="form-control">
          </div>
          <div class="mt-12">
            <input type="submit" value="Add Item" class="bg-green-400 ring-1 ring-green-500 px-10 py-3.5 rounded-md cursor-pointer font-normal text-slate-700">
          </div>
        </form>
      </div>
    </div>
    <div class="w-1/2 px-5">
      <table>
        <thead>
          <tr>
            <td>Item Name</td>
            <td>Waiting</td>
            <td>Price</td>
            <td>Ratings</td>
            <td>Action</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
        <tfoot></tfoot>
      </table>
    </div>
  </div>
</body>

</html>