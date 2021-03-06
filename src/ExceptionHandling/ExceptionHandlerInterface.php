<?php

/*
 * This file is part of the RichModelFormsBundle package.
 *
 * (c) Christian Flothmann <christian.flothmann@sensiolabs.de>
 * (c) Christopher Hertel <christopher.hertel@sensiolabs.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace SensioLabs\RichModelForms\ExceptionHandling;

use Symfony\Component\Form\FormConfigInterface;

/**
 * Converts exceptions into form errors.
 *
 * An exception handler gets passed the exception (or catchable error) that occurred during mapping the form to some
 * data, the form and the underlying data. Its responsibility is to extract some useful information for the user out
 * of the passed arguments and based on it create a FormError instance that will be attached to the form by the data
 * mapping layer.
 *
 * An exception layer can abstain from converting an exception (e.g. because it is a specialized implementation for
 * particular exceptions) and let other handlers deal with it by returning null.
 *
 * @author Christian Flothmann <christian.flothmann@sensiolabs.de>
 */
interface ExceptionHandlerInterface
{
    /**
     * @param mixed $data
     */
    public function getError(FormConfigInterface $formConfig, $data, \Throwable $e): ?Error;
}
