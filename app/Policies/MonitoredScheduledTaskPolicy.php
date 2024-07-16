<?php

namespace App\Policies;

use App\Models\User;
use Spatie\ScheduleMonitor\Models\MonitoredScheduledTask;
use Illuminate\Auth\Access\HandlesAuthorization;

class MonitoredScheduledTaskPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_monitored::scheduled::task');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \Spatie\ScheduleMonitor\Models\MonitoredScheduledTask  $monitoredScheduledTask
     * @return bool
     */
    public function view(User $user, MonitoredScheduledTask $monitoredScheduledTask): bool
    {
        return $user->can('view_monitored::scheduled::task');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function create(User $user): bool
    {
        return $user->can('create_monitored::scheduled::task');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \Spatie\ScheduleMonitor\Models\MonitoredScheduledTask  $monitoredScheduledTask
     * @return bool
     */
    public function update(User $user, MonitoredScheduledTask $monitoredScheduledTask): bool
    {
        return $user->can('update_monitored::scheduled::task');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \Spatie\ScheduleMonitor\Models\MonitoredScheduledTask  $monitoredScheduledTask
     * @return bool
     */
    public function delete(User $user, MonitoredScheduledTask $monitoredScheduledTask): bool
    {
        return $user->can('delete_monitored::scheduled::task');
    }

    /**
     * Determine whether the user can bulk delete.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_monitored::scheduled::task');
    }

    /**
     * Determine whether the user can permanently delete.
     *
     * @param  \App\Models\User  $user
     * @param  \Spatie\ScheduleMonitor\Models\MonitoredScheduledTask  $monitoredScheduledTask
     * @return bool
     */
    public function forceDelete(User $user, MonitoredScheduledTask $monitoredScheduledTask): bool
    {
        return $user->can('force_delete_monitored::scheduled::task');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_monitored::scheduled::task');
    }

    /**
     * Determine whether the user can restore.
     *
     * @param  \App\Models\User  $user
     * @param  \Spatie\ScheduleMonitor\Models\MonitoredScheduledTask  $monitoredScheduledTask
     * @return bool
     */
    public function restore(User $user, MonitoredScheduledTask $monitoredScheduledTask): bool
    {
        return $user->can('restore_monitored::scheduled::task');
    }

    /**
     * Determine whether the user can bulk restore.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_monitored::scheduled::task');
    }

    /**
     * Determine whether the user can replicate.
     *
     * @param  \App\Models\User  $user
     * @param  \Spatie\ScheduleMonitor\Models\MonitoredScheduledTask  $monitoredScheduledTask
     * @return bool
     */
    public function replicate(User $user, MonitoredScheduledTask $monitoredScheduledTask): bool
    {
        return $user->can('replicate_monitored::scheduled::task');
    }

    /**
     * Determine whether the user can reorder.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_monitored::scheduled::task');
    }

}
