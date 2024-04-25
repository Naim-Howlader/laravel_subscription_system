<x-admin-app-layout>
    <main>
        <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
          <!-- Breadcrumb Start -->
          <div
            class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between"
          >
            <h2 class="text-title-md2 font-bold text-black dark:text-white">
              Package
            </h2>

            <nav>
              <ol class="flex items-center gap-2">
                <li>
                  <a class="font-medium" href="index.html">Dashboard /</a>
                </li>
                <li class="font-medium text-primary">Form Layout</li>
              </ol>
            </nav>
          </div>
          <!-- Breadcrumb End -->

          <!-- ====== Form Layout Section Start -->
          <div class="grid grid-cols-1 gap-9 md:grid-cols-2">
            <div class="rounded-sm border border-stroke bg-white px-5 pb-2.5 pt-6 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:pb-1">
                <h4 class="mb-6 text-lg text-black dark:text-white">
                    Package Table
                </h4>
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                      <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                          <table id="packageTable"
                            class="min-w-full text-left text-sm font-light text-surface dark:text-white">
                            <thead
                              class="border-b border-neutral-200 font-medium dark:border-white/10">
                              <tr>
                                <th scope="col" class="px-6 py-4">#Sl</th>
                                <th scope="col" class="px-6 py-4">Status</th>
                                <th scope="col" class="px-6 py-4">Title</th>
                                <th scope="col" class="px-6 py-4">Mbps</th>
                                <th scope="col" class="px-6 py-4">Price</th>
                                <th scope="col" class="px-6 py-4">Features</th>
                              </tr>
                            </thead>
                            <tbody>
                              {{-- <tr class="border-b border-neutral-200 dark:border-white/10">
                                <td class="whitespace-nowrap px-6 py-4">1</td>
                                <td class="whitespace-nowrap px-6 py-4">Mark</td>
                                <td class="whitespace-nowrap px-6 py-4">Otto</td>
                              </tr> --}}
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            <div class="flex flex-col gap-9">
                <!-- Sign In Form -->
                <div
                  class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
                >
                  <div
                    class="border-b border-stroke px-6.5 py-4 dark:border-strokedark"
                  >
                    <h3 class="font-medium text-black dark:text-white">
                      Package Form
                    </h3>
                  </div>
                  <form id="packageCreateForm">
                    @csrf
                    <div class="p-6.5">
                      <div class="mb-4.5">
                        <label
                          class="mb-3 block text-sm font-medium text-black dark:text-white"
                        >
                          Package Title
                        </label>
                        <input
                          type="text"
                          name="title"

                          class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                        />
                      </div>
                      <div class="mb-4.5">
                        <label
                          class="mb-3 block text-sm font-medium text-black dark:text-white"
                        >
                          Package Mpbs
                        </label>
                        <input
                          type="text"
                          name="mbps"

                          class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                        />
                      </div>
                      <div class="mb-4.5">
                        <label
                          class="mb-3 block text-sm font-medium text-black dark:text-white"
                        >
                          Package Price
                        </label>
                        <input
                          type="text"
                          name="price"

                          class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input  dark:focus:border-primary"
                        />
                      </div>
                      <div class="mb-4.5 grid grid-cols-3">
                        @foreach ($features as $feature)
                        <div class="flex items-center mb-4">
                            <input id="{{ $feature->id }}" type="checkbox" value="{{ $feature->id }}" name="features[]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                            <label for="{{ $feature->id }}" class="ms-2 text-sm font-medium text-gray-900 dark:text-white">{{ $feature->name }}</label>
                        </div>
                        @endforeach
                      </div>

                      <div class="mb-5.5 mt-5 flex items-center justify-between">
                        <label class="inline-flex items-center cursor-pointer">
                            <input type="checkbox"  name="status" class="sr-only peer">
                            <div class="relative w-11 h-6 bg-gray-200  rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                            <span class="ms-3 text-sm font-medium text-gray-900 dark:text-white">Toggle For Activation</span>
                        </label>
                      </div>

                      <button type="submit"
                        class="flex w-[150px] justify-center rounded bg-primary p-3 font-medium text-gray hover:bg-opacity-90"
                      >
                        Create
                      </button>
                        </div>
                    </form>
                    </div>
                </div>
            <div>

          </div>

        </div>
      </main>

      <script>

                $(document).ready(function(){

                    function getAllPackages(){
                        $.ajax({
                    url : "{{ route('admin.packages.create') }}",
                    type : 'get',
                    success : function(data){

                        console.log(data);
                        let tableData = '';
                        let featureTable = $('#packageTable tbody');
                        let allPackage = data.data;
                        if(allPackage.length > 0){
                            $.each(allPackage,function(index,item){
                                let feature = '';
                                $.each(item.features, function(key, value) {
                                    feature += `<span class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">${value.name}</span>`;
                                });
                                // feature = feature.slice(0,-2);
                            let sts = '';
                            if(item.status == 1){
                                sts = `<span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Active</span>`;
                            }else{
                                sts = `<span class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">Inactive</span>`;
                            }
                            tableData += `
                            <tr class="border-b border-neutral-200 dark:border-white/10">
                                <td class="whitespace-nowrap px-6 py-4">${index +1}</td>
                                <td class="whitespace-nowrap px-6 py-4">${sts}</td>
                                <td class="whitespace-nowrap px-6 py-4">${item.title}</td>
                                <td class="whitespace-nowrap px-6 py-4">${item.mbps}</td>
                                <td class="whitespace-nowrap px-6 py-4">${item.price}</td>
                                <td class="whitespace-nowrap px-6 py-4">${feature}</td>
                            </tr>
                            `;
                        });
                        }else{
                            tableData +=`
                                    <tr><td colspan="3" class="text-center">No data found</td></tr>
                                    `
                        }
                        featureTable.html(tableData);
                    },
                    error : function(e){

                    }
                })
                    }



                    $('#packageCreateForm').submit(function(){
                        event.preventDefault();
                        let form = $('#packageCreateForm')[0];
                        let data = new FormData(form);
                        $.ajax({
                            url : "{{ route('admin.packages.store') }}",
                            type : "POST",
                            data : data,
                            processData : false,
                            contentType : false,
                            success : function(res){
                                getAllPackages();
                                console.log(res);
                                $('#packageCreateForm')[0].reset();


                            },error : function(e){
                                console.log(e);
                            }
                        })
                    })


                    getAllPackages();

                })
      </script>
</x-admin-app-layout>
