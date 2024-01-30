<div class="flex flex-wrap">
    <div class="flex-none w-full max-w-full">
        <div
            class="relative flex flex-col min-w-0 mb-6 break-words border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
            <div class="p-6 pb-2 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent bg-blue-500">
                <h6 class="text-white font-bold text-xl text-center">Tabel Mapel</h6>
            </div>
            <div class="flex-auto px-0 pt-0 pb-2">
                <div class="p-0 overflow-x-auto rounded-b-2xl">
                    <table
                        class="items-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500">
                        <thead class="align-bottom">
                            <tr>
                                <th
                                    class="px-6 py-3 font-bold text-left uppercase align-middle bg-blue-100 border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xs border-b-solid tracking-none whitespace-nowrap text-slate-400">
                                    No.</th>
                                <th
                                    class="px-6 py-3 font-bold text-left uppercase align-middle bg-blue-100 border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xs border-b-solid tracking-none whitespace-nowrap text-slate-400">
                                    Nama Pelajaran</th>
                                <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-blue-100 border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xs border-b-solid tracking-none whitespace-nowrap text-slate-400">
                                    Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mapel as $index => $mapel)
                                <tr class="{{ $loop->odd ? 'bg-gray-100' : 'bg-white' }}">
                                    <td
                                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                        <div class="flex px-2 py-1">
                                            <div class="flex flex-col justify-center">
                                                <h6 class="mb-0 text-sm leading-normal dark:text-white">
                                                    {{ $index + 1 }}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                        <div class="flex px-2 py-1">
                                            <div class="flex flex-col justify-center">
                                                <h6 class="mb-0 text-sm leading-normal dark:text-white">
                                                    {{ $mapel->nama }}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent text-center">
                                        <button type="button" onclick="showUpdateForm('{{ $mapel->nama }}')"
                                            class="text-xs font-semibold leading-tight text-white bg-blue-500 hover:bg-blue-600 py-1 px-2 rounded-l -mr-1">Update</button>
                                        <a href="{{ route('delete.mapel', ['nama' => $mapel->nama]) }}">
                                            <button type="button"
                                                class="text-xs font-semibold leading-tight text-white bg-red-500 hover:bg-red-600 py-1 px-2 rounded-r"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus ini')">Hapus</button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
