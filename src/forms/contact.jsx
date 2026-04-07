import * as React from "react"
import { zodResolver } from "@hookform/resolvers/zod"
import { Controller, useForm } from "react-hook-form"
import * as z from "zod"
import validator from "validator"

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
    fName: z.string().min(2, "Field is required.").max(32, "Bug title must be at most 32 characters."),
    email: z.email({ message: "Invalid email address" }),
    phone: z.string().refine(validator.isMobilePhone, 'Invalid phone number' )
})


export default function ContactForm() {
    const form = useForm({
        resolver: zodResolver(formSchema),
        defaultValues: initialValues,
    });

    function onSubmit(data) {
        console.log(data);
    }

    return (
        <div>
            <form className="flex flex-col gap-6" onSubmit={form.handleSubmit(onSubmit)}>
                <div className="grid grid-cols-2 gap-4">
                    <div>
                        <Controller
                            name="fName"
                            control={form.control}
                            render={({ field, fieldState }) => (
                                <Field data-invalid={fieldState.invalid}>
                                    <FieldLabel htmlFor="cf-fName">
                                        Full Name
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
                            control={form.control}
                            render={({ field, fieldState }) => (
                                <Field>
                                    <FieldLabel htmlFor="cf-mNumber">
                                        Account Number
                                    </FieldLabel>
                                    <Input
                                        {...field}
                                        id="cf-mNumber"
                                        placeholder=""
                                        autoComplete="off"
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
                            control={form.control}
                            render={({ field, fieldState }) => (
                                <Field data-invalid={fieldState.invalid}>
                                    <FieldLabel htmlFor="cf-email">
                                        Email address
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
                            control={form.control}
                            render={({ field, fieldState }) => (
                                <Field data-invalid={fieldState.invalid}>
                                    <FieldLabel htmlFor="cf-phone">
                                        Phone
                                    </FieldLabel>
                                    <Input
                                        {...field}
                                        id="cf-phone"
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
                </div>
                <div className="grid grid-cols-1 gap-4">
                    <div>
                        <Controller
                            name="subject"
                            control={form.control}
                            render={({ field, fieldState }) => (
                                <Field
                                    orientation="responsive"
                                    data-invalid={fieldState.invalid}
                                >
                                    <FieldLabel htmlFor="cf-subject">
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
                        control={form.control}
                        render={({ field, fieldState }) => (
                            <Field data-invalid={fieldState.invalid}>
                                <FieldLabel htmlFor="cf-comments">
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
                    <Button size="lg" type="submit">Submit</Button>
                </div>
            </form>
        </div>
    )
}