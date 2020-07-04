--
-- Name: fee_component; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE public.fee_component (
    id bigint NOT NULL,
    name character varying(128) NOT NULL,
    amount bigint NOT NULL,
    created_by character varying(32) NOT NULL,
    created_at timestamp without time zone NOT NULL,
    updated_by character varying(32),
    updated_at timestamp without time zone
);


--
-- Name: fee_component_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE public.fee_component_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- Name: fee_component_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE public.fee_component_id_seq OWNED BY public.fee_component.id;


--
-- Name: payment; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE public.payment (
    id bigint NOT NULL,
    student_id bigint NOT NULL,
    trx_date date NOT NULL,
    amount bigint NOT NULL,
    description character varying(512),
    status integer NOT NULL,
    created_at timestamp without time zone NOT NULL,
    created_by character varying(32) NOT NULL,
    updated_at timestamp without time zone,
    updated_by character varying(32)
);


--
-- Name: payment_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE public.payment_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- Name: payment_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE public.payment_id_seq OWNED BY public.payment.id;


--
-- Name: student; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE public.student (
    id bigint NOT NULL,
    nis character varying(32) NOT NULL,
    name character varying(128) NOT NULL,
    birthdate date,
    starting_year character varying(8),
    created_by character varying(32) NOT NULL,
    created_at timestamp without time zone NOT NULL,
    updated_by character varying(32),
    updated_at timestamp without time zone
);


--
-- Name: student_fee; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE public.student_fee (
    id bigint NOT NULL,
    student_id bigint NOT NULL,
    fee_id bigint NOT NULL
);


--
-- Name: student_fee_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE public.student_fee_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- Name: student_fee_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE public.student_fee_id_seq OWNED BY public.student_fee.id;


--
-- Name: student_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE public.student_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- Name: student_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE public.student_id_seq OWNED BY public.student.id;


--
-- Name: fee_component id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.fee_component ALTER COLUMN id SET DEFAULT nextval('public.fee_component_id_seq'::regclass);


--
-- Name: payment id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.payment ALTER COLUMN id SET DEFAULT nextval('public.payment_id_seq'::regclass);


--
-- Name: student id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.student ALTER COLUMN id SET DEFAULT nextval('public.student_id_seq'::regclass);


--
-- Name: student_fee id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.student_fee ALTER COLUMN id SET DEFAULT nextval('public.student_fee_id_seq'::regclass);


--
-- Name: fee_component fee_component_pkey; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.fee_component
    ADD CONSTRAINT fee_component_pkey PRIMARY KEY (id);


--
-- Name: payment payment_pkey; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.payment
    ADD CONSTRAINT payment_pkey PRIMARY KEY (id);


--
-- Name: student_fee student_fee_pkey; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.student_fee
    ADD CONSTRAINT student_fee_pkey PRIMARY KEY (id);


--
-- Name: student student_pkey; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.student
    ADD CONSTRAINT student_pkey PRIMARY KEY (id);


--
-- Name: payment payment_student_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.payment
    ADD CONSTRAINT payment_student_id_fkey FOREIGN KEY (student_id) REFERENCES public.student(id);


--
-- PostgreSQL database dump complete
--