<?php

declare(strict_types=1);

namespace OpenStack\BlockStorage\v2;

/**
 * Represents common constants.
 */
abstract class Enum
{
    public const STATUS_AVAILABLE         = 'available';
    public const STATUS_CREATING          = 'creating';
    public const STATUS_RESERVED          = 'reserved';
    public const STATUS_ATTACHING         = 'attaching';
    public const STATUS_DETACHING         = 'detaching';
    public const STATUS_IN_USE            = 'in-use';
    public const STATUS_MAINTENANCE       = 'maintenance';
    public const STATUS_DELETING          = 'deleting';
    public const STATUS_AWAITING_TRANSFER = 'awaiting-transfer';
    public const STATUS_ERROR             = 'error';
    public const STATUS_ERROR_DELETING    = 'error_deleting';
    public const STATUS_BACKING_UP        = 'backing-up';
    public const STATUS_ERROR_BACKING_UP  = 'error_backing-up';
    public const STATUS_ERROR_RESTORING   = 'error_restoring';
    public const STATUS_DOWNLOADING       = 'downloading';
    public const STATUS_UPLOADING         = 'uploading';
    public const STATUS_RETYPINGi         = 'retyping';
    public const STATUS_EXTENDING         = 'extending';

    public const ATTACH_STATUS_ATTACHED = 'attached';
    public const ATTACH_STATUS_DETACHED = 'detached';
}
