import * as React from "react"
import { zodResolver } from "@hookform/resolvers/zod"
import { Controller, useForm } from "react-hook-form"
import * as z from "zod"
import validator from "validator"
import { useHookFormMask, withMask } from 'use-mask-input';

import { Field, FieldDescription, FieldError, FieldLabel } from "../components/ui/field";
import { Select, SelectContent, SelectItem, SelectTrigger, SelectValue } from "../components/ui/select";
import { InputGroup, InputGroupTextarea } from "../components/ui/input-group";
import { Input } from "../components/ui/input";
import { Button } from "../components/ui/button";

const subjects = [
    "Billing Question",
    "Technical Issue",
    "Account Help",
    "Report a Caller",
    "General Question",
];

const initialValues = {
    fName: '',
    mNumber: '',
    email: '',
    phone: '',
    subject: subjects[0],
    comments: '',
}

const formSchema = z.object({
    fName: z.string().refine((value) => /^[a-zA-Z ,.'-]+$/.test(value ?? ""), 'Invalid name').min(2, "Field is required").max(50, "Name must be at most 50 characters"),
    email: z.email({ message: "Invalid email address" }),
    phone: z.string().refine(validator.isMobilePhone, 'Invalid phone number'),
    mNumber: z.string().optional(),
    subject: z.string().optional(),
    comments: z.string().optional(),
})


export default function ContactForm() {
    const [submitting, setSubmitting] = React.useState(false);
    const [status, setStatus] = React.useState();
    const [errors, setErrors] = React.useState(false);
    const registerWithMask = useHookFormMask(register);

    const { register, handleSubmit, control, reset } = useForm({
        resolver: zodResolver(formSchema),
        defaultValues: initialValues,
        onSubmit
    });

    const onSubmit = async (values) => {
        setStatus({ success: false });
        setSubmitting(true);
        try {
            const response = await fetch(
                'ajax/send-contact-form', {
                method: "POST",
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: JSON.stringify(values)
            }
            );

            const data = await response.json();
            if (data.status) {
                setStatus({
                    success: true,
                    message: data.message
                });
                setSubmitting(false);
                setErrors(false)
                reset();
            } else {
                console.error(data.message);
                setErrors(data.message);
                setSubmitting(false);
            }
        } catch (err) {
            console.error(err);
            setErrors(err.error.message);
            setStatus({ success: false });
            setSubmitting(false);
        }
    }
    const markup = { __html: submitting ? '<svg class="animate-spin" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12a9 9 0 1 1-6.219-8.56"/></svg>' : 'Submit' };

    return (
        <div>
            <form className="flex flex-col gap-6" onSubmit={handleSubmit(onSubmit)}>
                {status?.success &&
                    <div className="mb-4 rounded-md px-4 py-3 bg-green-100 border border-green-200 text-green-700">{status.message}</div>
                }
                <div className="grid grid-cols-2 gap-4">
                    <div>
                        <Controller
                            name="fName"
                            control={control}
                            render={({ field, fieldState }) => (
                                <Field data-invalid={fieldState.invalid}>
                                    <FieldLabel htmlFor="cf-fName" className='gap-0.5'>
                                        Full Name<span className="text-red-400">*</span>
                                    </FieldLabel>
                                    <Input
                                        {...field}
                                        id="cf-fName"
                                        aria-invalid={fieldState.invalid}
                                        placeholder=""
                                        autoComplete="off"
                                    />
                                    {fieldState.invalid && (
                                        <FieldError errors={[fieldState.error]} />
                                    )}
                                </Field>
                            )}
                        />
                    </div>
                    <div>
                        <Controller
                            name="mNumber"
                            control={control}
                            render={({ field, fieldState }) => (
                                <Field>
                                    <FieldLabel htmlFor="cf-mNumber" className='gap-0.5'>
                                        Account Number
                                    </FieldLabel>
                                    <Input
                                        {...field}
                                        id="cf-mNumber"
                                        placeholder=""
                                        autoComplete="off"
                                        ref={withMask('999999', {
                                            showMaskOnHover: false,
                                            placeholder: ' '
                                        })}
                                    />
                                    <FieldDescription>
                                        If Applicable
                                    </FieldDescription>
                                </Field>
                            )}
                        />
                    </div>
                </div>
                <div className="grid grid-cols-2 gap-4">
                    <div>
                        <Controller
                            name="email"
                            control={control}
                            render={({ field, fieldState }) => (
                                <Field data-invalid={fieldState.invalid}>
                                    <FieldLabel htmlFor="cf-email" className='gap-0.5'>
                                        Email Address<span className="text-red-400">*</span>
                                    </FieldLabel>
                                    <Input
                                        {...field}
                                        id="cf-email"
                                        aria-invalid={fieldState.invalid}
                                        placeholder=""
                                        autoComplete="off"
                                    />
                                    {fieldState.invalid && (
                                        <FieldError errors={[fieldState.error]} />
                                    )}
                                </Field>
                            )}
                        />
                    </div>
                    <div>
                        <Controller
                            name="phone"
                            control={control}
                            render={({ field, fieldState }) => (
                                <Field data-invalid={fieldState.invalid}>
                                    <FieldLabel htmlFor="cf-phone" className='gap-0.5'>
                                        Phone<span className="text-red-400">*</span>
                                    </FieldLabel>
                                    <Input
                                        {...field}
                                        id="cf-phone"
                                        aria-invalid={fieldState.invalid}
                                        placeholder=""
                                        autoComplete="off"
                                        ref={withMask('999-999-9999', {
                                            showMaskOnHover: false
                                        })}
                                    />
                                    {fieldState.invalid && (
                                        <FieldError errors={[fieldState.error]} />
                                    )}
                                </Field>
                            )}
                        />
                    </div>
                </div>
                <div className="grid grid-cols-1 gap-4">
                    <div>
                        <Controller
                            name="subject"
                            control={control}
                            render={({ field, fieldState }) => (
                                <Field
                                    orientation="responsive"
                                    data-invalid={fieldState.invalid}
                                >
                                    <FieldLabel htmlFor="cf-subject" className='gap-0.5'>
                                        Subject
                                    </FieldLabel>
                                    <Select
                                        name={field.name}
                                        value={field.value}
                                        onValueChange={field.onChange}
                                    >
                                        <SelectTrigger
                                            id="cf-subject"
                                            aria-invalid={fieldState.invalid}
                                            className="w-full"
                                        >
                                            <SelectValue placeholder="Select" />
                                        </SelectTrigger>
                                        <SelectContent position="item-aligned">
                                            {subjects.map((item, index) => (
                                                <SelectItem key={index} value={item}>
                                                    {item}
                                                </SelectItem>
                                            ))}
                                        </SelectContent>
                                    </Select>
                                </Field>
                            )}
                        />
                    </div>
                </div>
                <div className="grid grid-cols-1 gap-4">
                    <Controller
                        name="comments"
                        control={control}
                        render={({ field, fieldState }) => (
                            <Field data-invalid={fieldState.invalid}>
                                <FieldLabel htmlFor="cf-comments" className='gap-0.5'>
                                    Comments
                                </FieldLabel>
                                <InputGroup>
                                    <InputGroupTextarea
                                        {...field}
                                        id="cf-comments"
                                        placeholder=""
                                        rows={6}
                                        className="min-h-24 resize-none"
                                        aria-invalid={fieldState.invalid}
                                    />
                                </InputGroup>
                                {fieldState.invalid && (
                                    <FieldError errors={[fieldState.error]} />
                                )}
                            </Field>
                        )}
                    />
                </div>
                <div>
                    <Button size="lg" type="submit" disabled={submitting} className="[&_svg]:size-8">
                        <span dangerouslySetInnerHTML={markup}></span>
                    </Button>
                </div>

            </form>
        </div>
    )
}