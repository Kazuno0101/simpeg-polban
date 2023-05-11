<?php

namespace App\Observers;

use App\Models\PengajuanKenaikanJabatan;

class KenaikanJabatanObserver
{
    /**
     * Handle events after all transactions are committed.
     *
     * @var bool
     */
    public $afterCommit = true;

    /**
     * Handle the PengajuanKenaikanJabatan "created" event.
     *
     * @param  \App\Models\PengajuanKenaikanJabatan  $pengajuanKenaikanJabatan
     * @return void
     */
    public function created(PengajuanKenaikanJabatan $pengajuanKenaikanJabatan)
    {
        //
    }

    /**
     * Handle the PengajuanKenaikanJabatan "updated" event.
     *
     * @param  \App\Models\PengajuanKenaikanJabatan  $pengajuanKenaikanJabatan
     * @return void
     */
    public function updated(PengajuanKenaikanJabatan $pengajuanKenaikanJabatan)
    {
        //
        dd($pengajuanKenaikanJabatan);
    }

    /**
     * Handle the PengajuanKenaikanJabatan "deleted" event.
     *
     * @param  \App\Models\PengajuanKenaikanJabatan  $pengajuanKenaikanJabatan
     * @return void
     */
    public function deleted(PengajuanKenaikanJabatan $pengajuanKenaikanJabatan)
    {
        //
    }

    /**
     * Handle the PengajuanKenaikanJabatan "restored" event.
     *
     * @param  \App\Models\PengajuanKenaikanJabatan  $pengajuanKenaikanJabatan
     * @return void
     */
    public function restored(PengajuanKenaikanJabatan $pengajuanKenaikanJabatan)
    {
        //
    }

    /**
     * Handle the PengajuanKenaikanJabatan "force deleted" event.
     *
     * @param  \App\Models\PengajuanKenaikanJabatan  $pengajuanKenaikanJabatan
     * @return void
     */
    public function forceDeleted(PengajuanKenaikanJabatan $pengajuanKenaikanJabatan)
    {
        //
    }
}
