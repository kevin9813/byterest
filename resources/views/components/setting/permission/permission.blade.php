<!-- Contenido Principal -->
<main class="flex-1 p-6 overflow-auto h-screen">
    <div class="pcoded-content" id="permission">

        <div class="grid grid-cols-1 gap-6 xl:grid-cols-3 2xl:grid-cols-4">
            <div class="col-span-1 xl:col-span-2 2xl:col-span-3">
                <div class="flex items-center justify-between">
                    <h3 class="text-lg font-medium">File Manager</h3>
                    <div class="inline-flex items-center gap-3">
                        <div class="drawer drawer-end">
                            <input id="apps-file-overview-drawer" class="drawer-toggle" aria-label="File Overview Trigger" type="checkbox">
                            <div class="drawer-content">
                                <label for="apps-file-overview-drawer" class="btn drawer-button btn-sm btn-ghost border-base-300 flex xl:hidden"><span class="iconify lucide--folder-kanban size-4"></span></label>
                            </div>
                            <div class="drawer-side z-[50]">
                                <label for="apps-file-overview-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
                                <div class="w-72">
                                    <div class="card bg-base-100 card-border">
                                        <div class="card-body gap-0">
                                            <div class="flex items-center justify-between">
                                                <p class="font-medium">Overview</p>
                                                <button class="btn btn-success btn-outline btn-sm border-transparent">Upgrade Now</button>
                                            </div>
                                            <div class="card card-border bg-primary/5 border-primary/10 mt-3">
                                                <div class="card-body p-4">
                                                    <div class="flex items-center gap-2.5"><span class="iconify lucide--hard-drive text-primary size-4.5"></span><span class="text-primary font-medium">Local Storage</span><span class="text-primary ms-auto text-sm font-medium">64%</span></div>
                                                    <div class="mt-4 flex items-center justify-between gap-2 text-sm"><span class="font-medium">162 GB</span><span class="text-base-content/80 text-xs">Used of 250 GB</span></div>
                                                    <progress max="250" value="160" class="progress progress-primary mt-1 h-1.5"></progress>
                                                </div>
                                            </div>
                                            <p class="mt-6 text-sm font-medium">In Process</p>
                                            <div class="mt-3">
                                                <div class="card card-border border-base-300">
                                                    <div class="card-body px-4 pt-3 pb-2">
                                                        <div>
                                                            <div class="flex items-center justify-between"><span class="font-medium max-sm:text-sm">Feedback video (.mp4)</span>
                                                                <div class="inline-flex gap-2"><span class="iconify lucide--pause size-4"></span><span class="iconify lucide--x-circle text-error size-4"></span></div>
                                                            </div>
                                                            <div class="mt-1 flex items-center justify-between text-xs"><span>70%</span><span>1.2 GiB</span></div>
                                                            <progress class="progress progress-success h-1 align-super" max="100" value="70"></progress>
                                                        </div>
                                                        <div>
                                                            <div class="flex items-center justify-between"><span class="font-medium max-sm:text-sm">Company revenue (.xlsx)</span>
                                                                <div class="inline-flex gap-2"><span class="iconify lucide--play size-4"></span><span class="iconify lucide--x-circle text-error size-4"></span></div>
                                                            </div>
                                                            <div class="mt-1 flex items-center justify-between text-xs"><span>20%</span><span>12 MiB</span></div>
                                                            <progress class="progress progress-error h-1 align-super" max="100" value="20"></progress>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="mt-6 text-sm font-medium">File Activity</p>
                                            <div class="mt-3 overflow-hidden">
                                                <ul class="timeline timeline-vertical timeline-snap-icon timeline-hr-sm -ms-[100%] ps-10">
                                                    <li>
                                                        <div class="timeline-middle">
                                                            <div class="bg-primary/10 text-primary flex items-center rounded-full p-2"><span class="iconify lucide--pencil size-4"></span></div>
                                                        </div>
                                                        <div class="timeline-end my-2.5 w-full px-4">
                                                            <div class="flex items-center justify-between"><span class="text-sm font-medium">Olivia Duncan</span><span class="text-base-content/60 text-xs">Just Now</span></div>
                                                            <p class="text-base-content/70 mt-0.5 text-xs">Edited package.json in e-commerce</p>
                                                        </div>
                                                        <hr>
                                                    </li>
                                                    <li>
                                                        <hr>
                                                        <div class="timeline-middle">
                                                            <div class="bg-primary/10 text-primary flex items-center rounded-full p-2"><span class="iconify lucide--arrow-up-from-line size-4"></span></div>
                                                        </div>
                                                        <div class="timeline-end my-2.5 w-full px-4">
                                                            <div class="flex items-center justify-between"><span class="text-sm font-medium">Tillie Frank</span><span class="text-base-content/60 text-xs">22 hours</span></div>
                                                            <p class="text-base-content/70 mt-0.5 text-xs">Uploaded app.tsx file in react directory</p>
                                                        </div>
                                                        <hr>
                                                    </li>
                                                    <li>
                                                        <hr>
                                                        <div class="timeline-middle">
                                                            <div class="bg-error/10 text-error flex items-center rounded-full p-2"><span class="iconify lucide--trash size-4"></span></div>
                                                        </div>
                                                        <div class="timeline-end my-2.5 w-full px-4">
                                                            <div class="flex items-center justify-between"><span class="text-sm font-medium">Zaid Pope</span><span class="text-base-content/60 text-xs">3 days</span></div>
                                                            <p class="text-base-content/70 mt-0.5 text-xs">Removed style.css &amp; images folder from root</p>
                                                        </div>
                                                        <hr>
                                                    </li>
                                                    <li>
                                                        <hr>
                                                        <div class="timeline-middle">
                                                            <div class="bg-primary/10 text-primary flex items-center rounded-full p-2"><span class="iconify lucide--folder-input size-4"></span></div>
                                                        </div>
                                                        <div class="timeline-end my-2.5 w-full px-4">
                                                            <div class="flex items-center justify-between"><span class="text-sm font-medium">Grover Russo</span><span class="text-base-content/60 text-xs">Week ago</span></div>
                                                            <p class="text-base-content/70 mt-0.5 text-xs">Moved folders to inner directory</p>
                                                        </div>
                                                        <hr>
                                                    </li>
                                                    <li>
                                                        <hr>
                                                        <div class="timeline-middle">
                                                            <div class="bg-success/10 text-success flex items-center rounded-full p-2"><span class="iconify lucide--folder-plus size-4"></span></div>
                                                        </div>
                                                        <div class="timeline-end my-2.5 w-full px-4">
                                                            <div class="flex items-center justify-between"><span class="text-sm font-medium">Qasim Cotton</span><span class="text-base-content/60 text-xs">This month</span></div>
                                                            <p class="text-base-content/70 mt-0.5 text-xs">Created the root project</p>
                                                        </div>
                                                        <hr>
                                                    </li>
                                                    <li>
                                                        <hr>
                                                        <div class="timeline-middle">
                                                            <div class="bg-base-200 flex items-center rounded-full p-2"><span class="iconify lucide--more-horizontal size-4"></span></div>
                                                        </div>
                                                        <div class="timeline-end mx-5 my-2">
                                                            <button class="btn btn-sm btn-soft btn-primary">View Full Activity</button>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-ghost border-base-300 btn-sm" aria-label="Upload file"><span class="iconify lucide--upload size-4"></span>Upload</button>
                        <dialog id="apps-file-upload-modal" class="modal">
                            <div class="modal-box">
                                <div class="flex items-center justify-between">
                                    <p class="font-medium">Upload Files</p>
                                    <form method="dialog">
                                        <button class="btn btn-ghost btn-sm btn-circle" aria-label="Close upload file modal"><span class="iconify lucide--x size-5"></span></button>
                                    </form>
                                </div>
                                <div class="mt-4">
                                    <div class="filepond--wrapper">
                                        <div class="filepond--root filepond--hopper" data-style-button-remove-item-position="left" data-style-button-process-item-position="right" data-style-load-indicator-position="right" data-style-progress-indicator-position="right"
                                        data-style-button-remove-item-align="false" style="height: 76px;">
                                            <input class="filepond--browser" type="file" id="filepond--browser-5m3fpaijw" name="filepond" aria-controls="filepond--assistant-5m3fpaijw" aria-labelledby="filepond--drop-label-5m3fpaijw">
                                            <div class="filepond--drop-label" style="transform: translate3d(0px, 0px, 0px); opacity: 1;">
                                                <label for="filepond--browser-5m3fpaijw" id="filepond--drop-label-5m3fpaijw">Drag &amp; Drop your files or <span class="filepond--label-action" tabindex="0">Browse</span></label>
                                            </div>
                                            <div class="filepond--list-scroller" style="transform: translate3d(0px, 0px, 0px);">
                                                <ul class="filepond--list" role="list"></ul>
                                            </div>
                                            <div class="filepond--panel filepond--panel-root" data-scalable="true">
                                                <div class="filepond--panel-top filepond--panel-root"></div>
                                                <div class="filepond--panel-center filepond--panel-root" style="transform: translate3d(0px, 8px, 0px) scale3d(1, 0.6, 1);"></div>
                                                <div class="filepond--panel-bottom filepond--panel-root" style="transform: translate3d(0px, 68px, 0px);"></div>
                                            </div><span class="filepond--assistant" id="filepond--assistant-5m3fpaijw" role="alert" aria-live="polite" aria-relevant="additions"></span>
                                            <fieldset class="filepond--data">
                                                <legend>Files</legend>
                                            </fieldset>
                                            <div class="filepond--drip"></div>
                                        </div>
                                    </div>
                                    <div class="mt-5 text-end">
                                        <button class="btn btn-primary btn-sm"><span class="iconify lucide--arrow-down-to-line size-4"></span>Import</button>
                                    </div>
                                </div>
                            </div>
                            <form method="dialog" class="modal-backdrop">
                                <button>close</button>
                            </form>
                        </dialog>
                    </div>
                </div>
                <div class="mt-6">
                    <div class="grid gap-6 md:grid-cols-2 2xl:grid-cols-4">
                        <div class="card bg-base-100 cursor-pointer shadow transition-all hover:shadow-md">
                            <div class="card-body p-4">
                                <div class="bg-base-200 rounded-box w-fit p-2"><img class="size-6" alt="" src="/images/apps/files/one-drive.svg"></div>
                                <div class="mt-3 flex items-center justify-between">
                                    <p class="text-sm font-medium">One Drive</p><span class="text-base-content/80 text-xs">34%</span></div>
                                <progress max="250" value="85" class="progress progress-primary mt-1.5 h-1.5"></progress>
                                <div class="mt-1.5 flex items-center justify-between"><span class="text-sm font-medium">85 GB</span><span class="text-base-content/80 text-xs">250 GB</span></div>
                            </div>
                        </div>
                        <div class="card bg-base-100 cursor-pointer shadow transition-all hover:shadow-md">
                            <div class="card-body p-4">
                                <div class="bg-base-200 rounded-box w-fit p-2"><img class="size-6" alt="" src="/images/apps/files/google-drive.svg"></div>
                                <div class="mt-3 flex items-center justify-between">
                                    <p class="text-sm font-medium">Google Drive</p><span class="text-base-content/80 text-xs">56%</span></div>
                                <progress max="100" value="56" class="progress progress-warning mt-1.5 h-1.5"></progress>
                                <div class="mt-1.5 flex items-center justify-between"><span class="text-sm font-medium">56 GB</span><span class="text-base-content/80 text-xs">100 GB</span></div>
                            </div>
                        </div>
                        <div class="card bg-base-100 cursor-pointer shadow transition-all hover:shadow-md">
                            <div class="card-body p-4">
                                <div class="bg-base-200 rounded-box w-fit p-2"><img class="size-6" alt="" src="/images/apps/files/mega.svg"></div>
                                <div class="mt-3 flex items-center justify-between">
                                    <p class="text-sm font-medium">Mega</p><span class="text-base-content/80 text-xs">84%</span></div>
                                <progress max="150" value="126" class="progress progress-error mt-1.5 h-1.5"></progress>
                                <div class="mt-1.5 flex items-center justify-between"><span class="text-sm font-medium">126 GB</span><span class="text-base-content/80 text-xs">150 GB</span></div>
                            </div>
                        </div>
                        <div class="card bg-base-100 cursor-pointer shadow transition-all hover:shadow-md">
                            <div class="card-body p-4">
                                <div class="bg-base-200 rounded-box w-fit p-2"><img class="size-6" alt="" src="/images/apps/files/dropbox.svg"></div>
                                <div class="mt-3 flex items-center justify-between">
                                    <p class="text-sm font-medium">Dropbox</p><span class="text-base-content/80 text-xs">55%</span></div>
                                <progress max="40" value="22" class="progress progress-info mt-1.5 h-1.5"></progress>
                                <div class="mt-1.5 flex items-center justify-between"><span class="text-sm font-medium">22 GB</span><span class="text-base-content/80 text-xs">40 GB</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="mt-6 font-medium">Folders</h3>
                <div class="mt-3">
                    <div class="grid grid-cols-1 gap-5 md:grid-cols-3 2xl:grid-cols-5">
                        <div class="card card-border bg-base-100">
                            <div class="card-body p-3">
                                <div class="flex items-center gap-2">
                                    <div class="rounded-box flex items-center p-1.5 bg-primary/5 text-primary"><span class="iconify lucide--image size-5"></span></div><span class="text-sm font-medium">My Images</span>
                                    <div class="ms-auto">
                                        <div class="dropdown dropdown-bottom dropdown-center">
                                            <div tabindex="0" role="button" class="btn btn-ghost btn-circle btn-sm" aria-label="Menu"><span class="iconify lucide--more-vertical size-4"></span></div>
                                            <div tabindex="0" class="dropdown-content bg-base-100 rounded-box mt-2 w-52 shadow">
                                                <ul class="menu w-full p-1.5">
                                                    <li>
                                                        <div><span class="iconify lucide--arrow-down-to-line size-4"></span>Download</div>
                                                    </li>
                                                    <li>
                                                        <div><span class="iconify lucide--pen-line size-4"></span>Rename</div>
                                                    </li>
                                                    <li>
                                                        <div><span class="iconify lucide--user-round-plus size-4"></span>Share</div>
                                                    </li>
                                                </ul>
                                                <hr class="border-base-300">
                                                <ul class="menu w-full p-1.5">
                                                    <li>
                                                        <div class="text-error hover:bg-error/10"><span class="iconify lucide--trash size-4"></span>Move to bin</div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-base-content/70 mt-2 flex items-center text-xs">450 Files</div>
                            </div>
                        </div>
                        <div class="card card-border bg-base-100">
                            <div class="card-body p-3">
                                <div class="flex items-center gap-2">
                                    <div class="rounded-box flex items-center p-1.5 bg-secondary/5 text-secondary"><span class="iconify lucide--folder-archive size-5"></span></div><span class="text-sm font-medium">Archive</span>
                                    <div class="ms-auto">
                                        <div class="dropdown dropdown-bottom dropdown-center">
                                            <div tabindex="0" role="button" class="btn btn-ghost btn-circle btn-sm" aria-label="Menu"><span class="iconify lucide--more-vertical size-4"></span></div>
                                            <div tabindex="0" class="dropdown-content bg-base-100 rounded-box mt-2 w-52 shadow">
                                                <ul class="menu w-full p-1.5">
                                                    <li>
                                                        <div><span class="iconify lucide--arrow-down-to-line size-4"></span>Download</div>
                                                    </li>
                                                    <li>
                                                        <div><span class="iconify lucide--pen-line size-4"></span>Rename</div>
                                                    </li>
                                                    <li>
                                                        <div><span class="iconify lucide--user-round-plus size-4"></span>Share</div>
                                                    </li>
                                                </ul>
                                                <hr class="border-base-300">
                                                <ul class="menu w-full p-1.5">
                                                    <li>
                                                        <div class="text-error hover:bg-error/10"><span class="iconify lucide--trash size-4"></span>Move to bin</div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-base-content/70 mt-2 flex items-center text-xs">54 Files</div>
                            </div>
                        </div>
                        <div class="card card-border bg-base-100">
                            <div class="card-body p-3">
                                <div class="flex items-center gap-2">
                                    <div class="rounded-box flex items-center p-1.5 bg-warning/5 text-warning"><span class="iconify lucide--music size-5"></span></div><span class="text-sm font-medium">Music</span>
                                    <div class="ms-auto">
                                        <div class="dropdown dropdown-bottom dropdown-center">
                                            <div tabindex="0" role="button" class="btn btn-ghost btn-circle btn-sm" aria-label="Menu"><span class="iconify lucide--more-vertical size-4"></span></div>
                                            <div tabindex="0" class="dropdown-content bg-base-100 rounded-box mt-2 w-52 shadow">
                                                <ul class="menu w-full p-1.5">
                                                    <li>
                                                        <div><span class="iconify lucide--arrow-down-to-line size-4"></span>Download</div>
                                                    </li>
                                                    <li>
                                                        <div><span class="iconify lucide--pen-line size-4"></span>Rename</div>
                                                    </li>
                                                    <li>
                                                        <div><span class="iconify lucide--user-round-plus size-4"></span>Share</div>
                                                    </li>
                                                </ul>
                                                <hr class="border-base-300">
                                                <ul class="menu w-full p-1.5">
                                                    <li>
                                                        <div class="text-error hover:bg-error/10"><span class="iconify lucide--trash size-4"></span>Move to bin</div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-base-content/70 mt-2 flex items-center text-xs">874 Files</div>
                            </div>
                        </div>
                        <div class="card card-border bg-base-100">
                            <div class="card-body p-3">
                                <div class="flex items-center gap-2">
                                    <div class="rounded-box flex items-center p-1.5 bg-info/5 text-info"><span class="iconify lucide--video size-5"></span></div><span class="text-sm font-medium">Videos</span>
                                    <div class="ms-auto">
                                        <div class="dropdown dropdown-bottom dropdown-center">
                                            <div tabindex="0" role="button" class="btn btn-ghost btn-circle btn-sm" aria-label="Menu"><span class="iconify lucide--more-vertical size-4"></span></div>
                                            <div tabindex="0" class="dropdown-content bg-base-100 rounded-box mt-2 w-52 shadow">
                                                <ul class="menu w-full p-1.5">
                                                    <li>
                                                        <div><span class="iconify lucide--arrow-down-to-line size-4"></span>Download</div>
                                                    </li>
                                                    <li>
                                                        <div><span class="iconify lucide--pen-line size-4"></span>Rename</div>
                                                    </li>
                                                    <li>
                                                        <div><span class="iconify lucide--user-round-plus size-4"></span>Share</div>
                                                    </li>
                                                </ul>
                                                <hr class="border-base-300">
                                                <ul class="menu w-full p-1.5">
                                                    <li>
                                                        <div class="text-error hover:bg-error/10"><span class="iconify lucide--trash size-4"></span>Move to bin</div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-base-content/70 mt-2 flex items-center text-xs">125 Files</div>
                            </div>
                        </div>
                        <div class="card card-border bg-base-100">
                            <div class="card-body p-3">
                                <div class="flex items-center gap-2">
                                    <div class="rounded-box flex items-center p-1.5 bg-error/5 text-error"><span class="iconify lucide--shield-check size-5"></span></div><span class="text-sm font-medium">Private</span>
                                    <div class="ms-auto">
                                        <div class="dropdown dropdown-bottom dropdown-center">
                                            <div tabindex="0" role="button" class="btn btn-ghost btn-circle btn-sm" aria-label="Menu"><span class="iconify lucide--more-vertical size-4"></span></div>
                                            <div tabindex="0" class="dropdown-content bg-base-100 rounded-box mt-2 w-52 shadow">
                                                <ul class="menu w-full p-1.5">
                                                    <li>
                                                        <div><span class="iconify lucide--arrow-down-to-line size-4"></span>Download</div>
                                                    </li>
                                                    <li>
                                                        <div><span class="iconify lucide--pen-line size-4"></span>Rename</div>
                                                    </li>
                                                    <li>
                                                        <div><span class="iconify lucide--user-round-plus size-4"></span>Share</div>
                                                    </li>
                                                </ul>
                                                <hr class="border-base-300">
                                                <ul class="menu w-full p-1.5">
                                                    <li>
                                                        <div class="text-error hover:bg-error/10"><span class="iconify lucide--trash size-4"></span>Move to bin</div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-base-content/70 mt-2 flex items-center text-xs">8 Files</div>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="mt-6 font-medium">Your Files</h3>
                <div class="mt-3">
                    <div class="card card-border bg-base-100">
                        <div class="card-body p-0">
                            <div class="flex items-center justify-between gap-3 px-5 pt-5">
                                <div class="inline-flex items-center gap-3">
                                    <div class="dropdown dropdown-bottom dropdown-start">
                                        <div tabindex="0" role="button" class="btn btn-ghost btn-square border-base-300 btn-sm" aria-label="Add"><span class="iconify lucide--plus size-4"></span></div>
                                        <div tabindex="0" class="dropdown-content bg-base-100 rounded-box mt-2 w-52 shadow">
                                            <ul class="menu w-full p-1.5">
                                                <li>
                                                    <div><span class="iconify lucide--folder size-4"></span>New Folder</div>
                                                </li>
                                            </ul>
                                            <hr class="border-base-300">
                                            <ul class="menu w-full p-1.5">
                                                <li>
                                                    <div><span class="iconify lucide--folder-up size-4"></span>Upload Folder</div>
                                                </li>
                                                <li>
                                                    <div><span class="iconify lucide--file-up size-4"></span>Upload File</div>
                                                </li>
                                            </ul>
                                            <hr class="border-base-300">
                                            <ul class="menu w-full p-1.5">
                                                <li>
                                                    <div><span class="iconify lucide--file-text size-4"></span>Create Document</div>
                                                </li>
                                                <li>
                                                    <div><span class="iconify lucide--file-spreadsheet size-4"></span>Create Sheet</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <button class="btn-outline border-base-300 btn btn-sm hidden sm:flex"><span class="iconify lucide--folder-git-2 size-4"></span><span>Organize</span></button>
                                </div>
                                <div class="inline-flex items-center gap-3">
                                    <label class="input input-sm"><span class="iconify lucide--search text-base-content/80 size-4"></span>
                                        <input class="grow" placeholder="Search along files" aria-label="Search chat" type="search">
                                    </label>
                                    <div class="hidden sm:block">
                                        <select class="select select-sm w-32" aria-label="File type">
                                            <option value="" disabled="" selected="">File type</option>
                                            <option>Images</option>
                                            <option>Videos</option>
                                            <option>Documents</option>
                                            <option>Archives</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                    <div class="inline-flex items-center gap-1">
                                        <button class="btn btn-sm btn-ghost btn-square" aria-label="Grid"><span class="iconify lucide--grid-2x2 size-4"></span></button>
                                        <button class="btn btn-sm btn-soft btn-square" aria-label="List"><span class="iconify lucide--list size-4"></span></button>
                                    </div>
                                </div>
                            </div>
                            <div class="overflow-auto">
                                <table class="rounded-box mt-2 table">
                                    <thead>
                                        <tr>
                                            <th>
                                                <input class="checkbox checkbox-sm" aria-label="Checkbox example" type="checkbox">
                                            </th>
                                            <th>Name</th>
                                            <th>Size</th>
                                            <th>Created At</th>
                                            <th>Owner</th>
                                            <th>Shared With</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="hover:bg-base-200">
                                            <td>
                                                <input class="checkbox checkbox-sm" aria-label="Checkbox example" type="checkbox">
                                            </td>
                                            <td class="flex items-center space-x-3 truncate">
                                                <div class="bg-base-200 text-base-content/80 rounded-box flex items-center p-1.5"><span class="iconify lucide--video size-5"></span></div>
                                                <div class="text-sm font-medium">Latest Video</div>
                                            </td>
                                            <td>5.1 GiB</td>
                                            <td>26 Dec 2024</td>
                                            <td>Denish</td>
                                            <td><span class="text-base-content/60">3 members</span></td>
                                            <td>
                                                <button class="btn btn-ghost btn-square btn-sm" aria-label="Show file"><span class="iconify lucide--eye text-base-content/80 size-4"></span></button>
                                            </td>
                                        </tr>
                                        <tr class="hover:bg-base-200">
                                            <td>
                                                <input class="checkbox checkbox-sm" aria-label="Checkbox example" type="checkbox">
                                            </td>
                                            <td class="flex items-center space-x-3 truncate">
                                                <div class="bg-base-200 text-base-content/80 rounded-box flex items-center p-1.5"><span class="iconify lucide--file-text size-5"></span></div>
                                                <div class="text-sm font-medium">Company Documents</div>
                                            </td>
                                            <td>7.8 MiB</td>
                                            <td>25 Dec 2024</td>
                                            <td>Company</td>
                                            <td><span class="text-error flex items-center gap-2"><span class="iconify lucide--shield size-4"></span>Private</span>
                                            </td>
                                            <td>
                                                <button class="btn btn-ghost btn-square btn-sm" aria-label="Show file"><span class="iconify lucide--eye text-base-content/80 size-4"></span></button>
                                            </td>
                                        </tr>
                                        <tr class="hover:bg-base-200">
                                            <td>
                                                <input class="checkbox checkbox-sm" aria-label="Checkbox example" type="checkbox">
                                            </td>
                                            <td class="flex items-center space-x-3 truncate">
                                                <div class="bg-base-200 text-base-content/80 rounded-box flex items-center p-1.5"><span class="iconify lucide--figma size-5"></span></div>
                                                <div class="text-sm font-medium">Figma Design</div>
                                            </td>
                                            <td>1.4 MiB</td>
                                            <td>23 Dec 2024</td>
                                            <td>Turkes Duis</td>
                                            <td><span class="text-base-content/60">7 members</span></td>
                                            <td>
                                                <button class="btn btn-ghost btn-square btn-sm" aria-label="Show file"><span class="iconify lucide--eye text-base-content/80 size-4"></span></button>
                                            </td>
                                        </tr>
                                        <tr class="hover:bg-base-200">
                                            <td>
                                                <input class="checkbox checkbox-sm" aria-label="Checkbox example" type="checkbox">
                                            </td>
                                            <td class="flex items-center space-x-3 truncate">
                                                <div class="bg-base-200 text-base-content/80 rounded-box flex items-center p-1.5"><span class="iconify lucide--music size-5"></span></div>
                                                <div class="text-sm font-medium">Top Music</div>
                                            </td>
                                            <td>4.8 MiB</td>
                                            <td>19 Dec 2024</td>
                                            <td>Me</td>
                                            <td><span class="text-success flex items-center gap-2"><span class="iconify lucide--globe size-4"></span>Public</span>
                                            </td>
                                            <td>
                                                <button class="btn btn-ghost btn-square btn-sm" aria-label="Show file"><span class="iconify lucide--eye text-base-content/80 size-4"></span></button>
                                            </td>
                                        </tr>
                                        <tr class="hover:bg-base-200">
                                            <td>
                                                <input class="checkbox checkbox-sm" aria-label="Checkbox example" type="checkbox">
                                            </td>
                                            <td class="flex items-center space-x-3 truncate">
                                                <div class="bg-base-200 text-base-content/80 rounded-box flex items-center p-1.5"><span class="iconify lucide--file-spreadsheet size-5"></span></div>
                                                <div class="text-sm font-medium">Office Sheet</div>
                                            </td>
                                            <td>56 KiB</td>
                                            <td>11 Dec 2024</td>
                                            <td>Mr. Boss</td>
                                            <td><span class="text-base-content/60">2 members</span></td>
                                            <td>
                                                <button class="btn btn-ghost btn-square btn-sm" aria-label="Show file"><span class="iconify lucide--eye text-base-content/80 size-4"></span></button>
                                            </td>
                                        </tr>
                                        <tr class="hover:bg-base-200">
                                            <td>
                                                <input class="checkbox checkbox-sm" aria-label="Checkbox example" type="checkbox">
                                            </td>
                                            <td class="flex items-center space-x-3 truncate">
                                                <div class="bg-base-200 text-base-content/80 rounded-box flex items-center p-1.5"><span class="iconify lucide--message-circle-dashed size-5"></span></div>
                                                <div class="text-sm font-medium">Chat Backup</div>
                                            </td>
                                            <td>252 KiB</td>
                                            <td>12 Nov 2024</td>
                                            <td>Withden</td>
                                            <td><span class="text-error flex items-center gap-2"><span class="iconify lucide--shield size-4"></span>Private</span>
                                            </td>
                                            <td>
                                                <button class="btn btn-ghost btn-square btn-sm" aria-label="Show file"><span class="iconify lucide--eye text-base-content/80 size-4"></span></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden xl:col-span-1 xl:block 2xl:col-span-1">
                <div class="card bg-base-100 card-border">
                    <div class="card-body gap-0">
                        <div class="flex items-center justify-between">
                            <p class="font-medium">Overview</p>
                            <button class="btn btn-success btn-outline btn-sm border-transparent">Upgrade Now</button>
                        </div>
                        <div class="card card-border bg-primary/5 border-primary/10 mt-3">
                            <div class="card-body p-4">
                                <div class="flex items-center gap-2.5"><span class="iconify lucide--hard-drive text-primary size-4.5"></span><span class="text-primary font-medium">Local Storage</span><span class="text-primary ms-auto text-sm font-medium">64%</span></div>
                                <div class="mt-4 flex items-center justify-between gap-2 text-sm"><span class="font-medium">162 GB</span><span class="text-base-content/80 text-xs">Used of 250 GB</span></div>
                                <progress max="250" value="160" class="progress progress-primary mt-1 h-1.5"></progress>
                            </div>
                        </div>
                        <p class="mt-6 text-sm font-medium">In Process</p>
                        <div class="mt-3">
                            <div class="card card-border border-base-300">
                                <div class="card-body px-4 pt-3 pb-2">
                                    <div>
                                        <div class="flex items-center justify-between"><span class="font-medium max-sm:text-sm">Feedback video (.mp4)</span>
                                            <div class="inline-flex gap-2"><span class="iconify lucide--pause size-4"></span><span class="iconify lucide--x-circle text-error size-4"></span></div>
                                        </div>
                                        <div class="mt-1 flex items-center justify-between text-xs"><span>70%</span><span>1.2 GiB</span></div>
                                        <progress class="progress progress-success h-1 align-super" max="100" value="70"></progress>
                                    </div>
                                    <div>
                                        <div class="flex items-center justify-between"><span class="font-medium max-sm:text-sm">Company revenue (.xlsx)</span>
                                            <div class="inline-flex gap-2"><span class="iconify lucide--play size-4"></span><span class="iconify lucide--x-circle text-error size-4"></span></div>
                                        </div>
                                        <div class="mt-1 flex items-center justify-between text-xs"><span>20%</span><span>12 MiB</span></div>
                                        <progress class="progress progress-error h-1 align-super" max="100" value="20"></progress>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="mt-6 text-sm font-medium">File Activity</p>
                        <div class="mt-3 overflow-hidden">
                            <ul class="timeline timeline-vertical timeline-snap-icon timeline-hr-sm -ms-[100%] ps-10">
                                <li>
                                    <div class="timeline-middle">
                                        <div class="bg-primary/10 text-primary flex items-center rounded-full p-2"><span class="iconify lucide--pencil size-4"></span></div>
                                    </div>
                                    <div class="timeline-end my-2.5 w-full px-4">
                                        <div class="flex items-center justify-between"><span class="text-sm font-medium">Olivia Duncan</span><span class="text-base-content/60 text-xs">Just Now</span></div>
                                        <p class="text-base-content/70 mt-0.5 text-xs">Edited package.json in e-commerce</p>
                                    </div>
                                    <hr>
                                </li>
                                <li>
                                    <hr>
                                    <div class="timeline-middle">
                                        <div class="bg-primary/10 text-primary flex items-center rounded-full p-2"><span class="iconify lucide--arrow-up-from-line size-4"></span></div>
                                    </div>
                                    <div class="timeline-end my-2.5 w-full px-4">
                                        <div class="flex items-center justify-between"><span class="text-sm font-medium">Tillie Frank</span><span class="text-base-content/60 text-xs">22 hours</span></div>
                                        <p class="text-base-content/70 mt-0.5 text-xs">Uploaded app.tsx file in react directory</p>
                                    </div>
                                    <hr>
                                </li>
                                <li>
                                    <hr>
                                    <div class="timeline-middle">
                                        <div class="bg-error/10 text-error flex items-center rounded-full p-2"><span class="iconify lucide--trash size-4"></span></div>
                                    </div>
                                    <div class="timeline-end my-2.5 w-full px-4">
                                        <div class="flex items-center justify-between"><span class="text-sm font-medium">Zaid Pope</span><span class="text-base-content/60 text-xs">3 days</span></div>
                                        <p class="text-base-content/70 mt-0.5 text-xs">Removed style.css &amp; images folder from root</p>
                                    </div>
                                    <hr>
                                </li>
                                <li>
                                    <hr>
                                    <div class="timeline-middle">
                                        <div class="bg-primary/10 text-primary flex items-center rounded-full p-2"><span class="iconify lucide--folder-input size-4"></span></div>
                                    </div>
                                    <div class="timeline-end my-2.5 w-full px-4">
                                        <div class="flex items-center justify-between"><span class="text-sm font-medium">Grover Russo</span><span class="text-base-content/60 text-xs">Week ago</span></div>
                                        <p class="text-base-content/70 mt-0.5 text-xs">Moved folders to inner directory</p>
                                    </div>
                                    <hr>
                                </li>
                                <li>
                                    <hr>
                                    <div class="timeline-middle">
                                        <div class="bg-success/10 text-success flex items-center rounded-full p-2"><span class="iconify lucide--folder-plus size-4"></span></div>
                                    </div>
                                    <div class="timeline-end my-2.5 w-full px-4">
                                        <div class="flex items-center justify-between"><span class="text-sm font-medium">Qasim Cotton</span><span class="text-base-content/60 text-xs">This month</span></div>
                                        <p class="text-base-content/70 mt-0.5 text-xs">Created the root project</p>
                                    </div>
                                    <hr>
                                </li>
                                <li>
                                    <hr>
                                    <div class="timeline-middle">
                                        <div class="bg-base-200 flex items-center rounded-full p-2"><span class="iconify lucide--more-horizontal size-4"></span></div>
                                    </div>
                                    <div class="timeline-end mx-5 my-2">
                                        <button class="btn btn-sm btn-soft btn-primary">View Full Activity</button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
