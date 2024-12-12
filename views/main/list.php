<div class="rounded-xl w-full max-w-3xl mx-auto shadow ring-black/5 bg-slate-50 py-8 px-8">
    <div class="px-4 sm:px-0">
        <h3 class="text-base/7 font-semibold text-gray-900">List of files</h3>
    </div>
    <?php if (empty($list)) : ?>
        <p class="text-sm/6 font-medium text-gray-900 mt-8">Nothing to see... Try upload something!</p>
    <?php else : ?>
        <div class="mt-4 divide-y">
            <?php foreach ($list as $link) : ?>
                <form action="/d" method="POST" class="py-3">
                    <li class="flex items-center justify-between text-sm/6">
                        <div class="flex w-0 flex-1 items-center">
                            <svg class="size-5 shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                <path fill-rule="evenodd" d="M15.621 4.379a3 3 0 0 0-4.242 0l-7 7a3 3 0 0 0 4.241 4.243h.001l.497-.5a.75.75 0 0 1 1.064 1.057l-.498.501-.002.002a4.5 4.5 0 0 1-6.364-6.364l7-7a4.5 4.5 0 0 1 6.368 6.36l-3.455 3.553A2.625 2.625 0 1 1 9.52 9.52l3.45-3.451a.75.75 0 1 1 1.061 1.06l-3.45 3.451a1.125 1.125 0 0 0 1.587 1.595l3.454-3.553a3 3 0 0 0 0-4.242Z" clip-rule="evenodd"></path>
                            </svg>
                            <div class="ml-2 flex min-w-0 flex-1 gap-2">
                                <span class="truncate font-medium"><?= htmlspecialchars($link['name']) ?></span>
                                <span class="shrink-0 text-gray-400"><?= $link['size'] ?></span>
                            </div>
                        </div>
                        <?php if ($link['link']) : ?>
                            <button name="id" value="<?= $link['link'] ?>" class="font-semibold text-teal-500 hover:text-teal-600 ml-2 shrink-0">
                                Download
                            </button>
                        <?php else : ?>
                            <p class="font-semibold text-black/80 ml-2 shrink-0">
                                Expired
                            </p>
                        <?php endif ?>
                    </li>
                </form>
            <?php endforeach ?>
        </div>
    <?php endif ?>
</div>